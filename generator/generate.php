<?php

namespace WpService\Generator;

// You'll need the Composer Autoloader.
require dirname(__FILE__) . '/../vendor/autoload.php';

use Generator;
use WpService\Generator\File\CreateDecoratorClassFile;
use WpService\Generator\File\CreateInterfaceFileFromFunction;
use WpService\Generator\File\CreateInterfaceFileThatExtendsOtherInterfaces;
use WpService\Generator\File\CreateServiceClassFile;
use WpService\Generator\File\CreateLazyDecoratorClassFile;
use WpService\Generator\File\CreateFakeServiceClassFile;
use PhpParser\Node;
use PhpParser\Node\Stmt\Function_;
use PhpParser\Node\Stmt\Namespace_;
use StubsGenerator\StubsGenerator;
use WpService\Generator\Function\{
    CamelCasedFunction,
    ConvertTypedArrayInputTypeToArray,
    ConvertTypedArrayReturnTypeToArray,
    CreateFunction,
    FunctionWithNamespacedTypes,
    FunctionWithNativeFunctionBody,
    FunctionWithoutInvalidVoidReturnType,
    FunctionWithSanitizedTypes,
    FunctionWithDecoratorFunctionBody,
    FunctionWithFakeFunctionBody};
use WpService\Generator\Function\IsValidFunction\IsPrivateFunction;
use WpService\Generator\Function\IsValidFunction\IsValidFunction;
use WpService\Generator\Function\IsValidFunction\FunctionHasDocBlock;
use WpService\Generator\Function\Parameter\SanitizeCallbackDefaultInput;
use WpService\Generator\Function\Parameter\SanitizeIntDefaultInput;
use WpService\Generator\Function\Parameter\SanitizeStringDefaultInput;

$generator = new StubsGenerator(StubsGenerator::FUNCTIONS);
$wordpress = dirname(__FILE__) . '/../vendor/wordpress';

$finder = \StubsGenerator\Finder::create()
    ->in($wordpress)
    ->notPath('wp-admin/press-this.php')
    ->notPath('wp-admin/includes/class-avif-info.php')
    ->notPath('wp-admin/includes/class-pclzip.php')
    ->notPath('wp-includes/class-pclzip.php')
    ->notPath('wp-admin/includes/noop.php')
    ->notPath('wp-admin/install-helper.php')
    ->notPath('wp-content')
    ->notPath('wp-includes/theme-compat')
    ->notPath('wp-includes/compat.php')
    ->notPath('wp-includes/spl-autoload-compat.php')
    ->notPath('wp-includes/random_compat')
    ->notPath('wp-includes/sodium_compat')
    ->notPath('wp-includes/cache-compat.php')
    ->notPath('wp-includes/php-compat')
    ->notPath('wp-admin/admin-functions.php')
    ->notPath('wp-admin/custom-background.php')
    ->notPath('wp-admin/custom-header.php')
    ->notPath('wp-admin/includes/class-wp-upgrader-skins.php')
    ->notPath('wp-admin/upgrade-functions.php')
    ->notPath('wp-includes/class-feed.php')
    ->notPath('wp-includes/class-json.php')
    ->notPath('wp-includes/class-oembed.php')
    ->notPath('wp-includes/class-snoopy.php')
    ->notPath('wp-includes/date.php')
    ->notPath('wp-includes/embed-template.php')
    ->notPath('wp-includes/locale.php')
    ->notPath('wp-includes/registration-functions.php')
    ->notPath('wp-includes/registration.php')
    ->notPath('wp-includes/rss-functions.php')
    ->notPath('wp-includes/rss.php')
    ->notPath('wp-includes/session.php')
    ->notPath('wp-admin/includes/upgrade.php')
    ->sortByName();

$result = $generator->generate($finder);

function getFunctions(Node $node): Generator
{
    if ($node instanceof Namespace_) {
        foreach ($node->stmts as $stmt) {
            yield from getFunctions($stmt);
        }
    }

    if ($node instanceof Function_) {
        yield [$node];
    }
}

$functions_ = $result->getStubStmts();

$functions_ = [];
foreach ($result->getStubStmts() as $stmt) {
    foreach (getFunctions($stmt) as $function) {
        $functions_[] = $function[0];
    }
}



$functions_ = array_filter($functions_, fn($stmt) => get_class($stmt) === Function_::class);

/**
 * Parameter decorators
 */
$parameterDecorators = [
    new SanitizeCallbackDefaultInput(),
    new SanitizeIntDefaultInput(),
    new SanitizeStringDefaultInput()
];

$allFunctions = array_map(fn($stmt) => CreateFunction::create($stmt, $parameterDecorators), $functions_);

$functionValidator = IsValidFunction::create();
$functionValidator = new IsPrivateFunction($functionValidator);
$functionValidator = new FunctionHasDocBlock($functionValidator);
// $functionValidator = new IsDuplicateFunction($allFunctions, $functionValidator);

$allFunctions = array_filter($allFunctions, fn($function) =>$functionValidator->isValidFunction($function));

$allFunctions = array_map(fn($function) => new CamelCasedFunction($function), $allFunctions);
// $allFunctions = array_map(fn($function) => new FunctionWihoutLeadingWpInName($function), $allFunctions);
$allFunctions = array_map(fn($function) => new ConvertTypedArrayReturnTypeToArray($function), $allFunctions);
$allFunctions = array_map(fn($function) => new ConvertTypedArrayInputTypeToArray($function), $allFunctions);
$allFunctions = array_map(fn($function) => new FunctionWithSanitizedTypes($function), $allFunctions);
$allFunctions = array_map(fn($function) => new FunctionWithNamespacedTypes($function), $allFunctions);
$allFunctions = array_map(fn($function) => new FunctionWithoutInvalidVoidReturnType($function), $allFunctions);
$allFunctions = array_filter($allFunctions, fn($function) => !str_contains($function->getDocBlock(), '@deprecated'));

// $allFunctions = array_filter($allFunctions, fn($function) => $function->getOriginalName() === 'add_action');

$libPath             = dirname(__FILE__) . "/../src";
$contractsPath       = $libPath . "/Contracts";
$serviceContractPath = $libPath . "/WpService.php";
$contracts           = array_map(fn($function) => CreateInterfaceFileFromFunction::create($function, 'WpService\Contracts'), $allFunctions);

/**
 * Create a contract file for each function
 */
foreach ($contracts as $contract) {
    $contractFileContent = $contract->__toString();
    $contractFileName    = $contract->getFileName();
    file_put_contents("{$contractsPath}/{$contractFileName}", $contract);
    echo "Created contract file: {$contractFileName}\n";
}

/**
 * Create a service contract file
 */
$serviceContract         = CreateInterfaceFileThatExtendsOtherInterfaces::create('WpService', $contracts, 'WpService');
$serviceContractFileName = $serviceContract->getFileName();
file_put_contents("{$libPath}/{$serviceContractFileName}", $serviceContract->__toString());
echo "Created contract file: {$serviceContractFileName}\n";

/**
 * Create a service class file
 */
$functionsWithNativeBody    = array_map(fn($function) => new FunctionWithNativeFunctionBody($function), $allFunctions);
$nativeServiceClass         = CreateServiceClassFile::create('NativeWpService', 'WpService\Implementations', ['\WpService\WpService'], $functionsWithNativeBody);
$nativeServiceClassFileName = $nativeServiceClass->getFileName();
$nativeServiceClassPath     = "{$libPath}/Implementations/{$nativeServiceClassFileName}";

file_put_contents($nativeServiceClassPath, $nativeServiceClass->__toString());
echo "Created service class file: {$nativeServiceClassFileName}\n";

/**
 * Create a service decorator class file
 */
$functionsWithDecoratorBody    = array_map(fn($function) => new FunctionWithDecoratorFunctionBody($function), $allFunctions);
$decoratorServiceClass         = CreateDecoratorClassFile::create('WpServiceDecorator', 'WpService\Implementations', ['\WpService\WpService'], $functionsWithDecoratorBody);
$decoratorServiceClassFileName = $decoratorServiceClass->getFileName();
$decoratorServiceClassPath     = "{$libPath}/Implementations/{$decoratorServiceClassFileName}";

file_put_contents($decoratorServiceClassPath, $decoratorServiceClass->__toString());
echo "Created service class file: {$decoratorServiceClassFileName}\n";

/**
 * Create a lazy service decorator class file
 */
$lazyDecoratorServiceClass         = CreateLazyDecoratorClassFile::create('WpServiceLazyDecorator', 'WpService\Implementations', ['\WpService\WpService'], $functionsWithDecoratorBody);
$lazyDecoratorServiceClassFileName = $lazyDecoratorServiceClass->getFileName();
$lazyDecoratorServiceClassPath     = "{$libPath}/Implementations/{$lazyDecoratorServiceClassFileName}";

file_put_contents($lazyDecoratorServiceClassPath, $lazyDecoratorServiceClass->__toString());
echo "Created service class file: {$lazyDecoratorServiceClassFileName}\n";

/**
 * Create a fake service decorator class file
 */
$functionsWithFakeBody    = array_map(fn($function) => new FunctionWithFakeFunctionBody($function), $allFunctions);
$fakeServiceClass         = CreateFakeServiceClassFile::create('FakeWpService', 'WpService\Implementations', ['\WpService\WpService'], $functionsWithFakeBody);
$fakeServiceClassFileName = $fakeServiceClass->getFileName();
$fakeServiceClassPath     = "{$libPath}/Implementations/{$fakeServiceClassFileName}";

file_put_contents($fakeServiceClassPath, $fakeServiceClass->__toString());
echo "Created service class file: {$fakeServiceClassFileName}\n";
