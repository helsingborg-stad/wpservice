<?php

namespace WpService\Generator;

// You'll need the Composer Autoloader.
require dirname(__FILE__) . '/../vendor/autoload.php';

use Generator;
use PhpParser\Node;
use PhpParser\Node\Stmt\Function_;
use PhpParser\Node\Stmt\Namespace_;
use StubsGenerator\StubsGenerator;
use WpService\Generator\File\FileBuilder\FileBuilder;
use WpService\Generator\File\FileBuilder\FileDirector;
use WpService\Generator\Function\{
    CamelCasedFunction,
    ConvertTypedArrayInputTypeToArray,
    ConvertTypedArrayReturnTypeToArray,
    CreateFunction,
    FunctionWithNamespacedTypes,
    FunctionWithoutInvalidVoidReturnType,
    FunctionWithSanitizedTypes
};
use WpService\Generator\Function\FunctionToString\FunctionToDefinitionString;
use WpService\Generator\Function\IsValidFunction\IsPrivateFunction;
use WpService\Generator\Function\IsValidFunction\IsValidFunction;
use WpService\Generator\Function\IsValidFunction\FunctionHasDocBlock;
use WpService\Generator\Function\IsValidFunction\InvalidateDeprecatedFunction;
use WpService\Generator\Function\Parameter\SanitizeCallbackDefaultInput;
use WpService\Generator\Function\Parameter\SanitizeIntDefaultInput;
use WpService\Generator\Function\Parameter\SanitizeStringDefaultInput;

$generator = new StubsGenerator(StubsGenerator::FUNCTIONS);
$finder    = Finder::getFinder();
$result    = $generator->generate($finder);

function extractFunctionsFromStubs($result): array
{
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

    $functions_ = [];

    foreach ($result->getStubStmts() as $stmt) {
        foreach (getFunctions($stmt) as $function_) {
            $functions_[] = reset($function_);
        }
    }

    return array_filter($functions_, fn($stmt) => get_class($stmt) === Function_::class);
}

// Extract function definitions from stubs
$functionDefinitions = extractFunctionsFromStubs($result);

// Create functions
$functions = array_map(fn($stmt) => CreateFunction::create($stmt, [
    new SanitizeCallbackDefaultInput(),
    new SanitizeIntDefaultInput(),
    new SanitizeStringDefaultInput()
]), $functionDefinitions);

// Filter out invalid and unwanted functions
$functionValidator = IsValidFunction::create();
$functionValidator = new IsPrivateFunction($functionValidator);
$functionValidator = new FunctionHasDocBlock($functionValidator);
$functionValidator = new InvalidateDeprecatedFunction($functionValidator);
$functions         = array_filter($functions, fn($function) =>$functionValidator->isValidFunction($function));

// Decorate functions
$functions = array_map(fn($function) => new CamelCasedFunction($function), $functions);
$functions = array_map(fn($function) => new ConvertTypedArrayReturnTypeToArray($function), $functions);
$functions = array_map(fn($function) => new ConvertTypedArrayInputTypeToArray($function), $functions);
$functions = array_map(fn($function) => new FunctionWithSanitizedTypes($function), $functions);
$functions = array_map(fn($function) => new FunctionWithNamespacedTypes($function), $functions);
$functions = array_map(fn($function) => new FunctionWithoutInvalidVoidReturnType($function), $functions);

// File creation dependencies
$fileBuilder                = new FileBuilder($functions);
$fileDirector               = new FileDirector($fileBuilder);
$functionToDefinitionString = new FunctionToDefinitionString();

// Create contract files
$contractFiles = array_map([$fileDirector, 'buildContractFile'], $functions);

// Create service files
$serviceFiles = [
    $fileDirector->buildServiceInterfaceFile(array_map(fn($file) => "Contracts\\{$file->getName()}", $contractFiles)),
    $fileDirector->buildNativeFile(),
    $fileDirector->buildDecoratorFile(),
    $fileDirector->buildLazyDecoratorFile(),
    $fileDirector->buildFakeServiceFile()
];

// Write files
foreach (array_merge($contractFiles, $serviceFiles) as $file) {
    file_put_contents($file->getFilePath(), (string)$file);
}
