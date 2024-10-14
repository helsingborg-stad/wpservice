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
use WpService\Generator\File\FileType;
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

/*
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
$functionValidator = new InvalidateDeprecatedFunction($functionValidator);
$allFunctions      = array_filter($allFunctions, fn($function) =>$functionValidator->isValidFunction($function));

$allFunctions = array_map(fn($function) => new CamelCasedFunction($function), $allFunctions);
$allFunctions = array_map(fn($function) => new ConvertTypedArrayReturnTypeToArray($function), $allFunctions);
$allFunctions = array_map(fn($function) => new ConvertTypedArrayInputTypeToArray($function), $allFunctions);
$allFunctions = array_map(fn($function) => new FunctionWithSanitizedTypes($function), $allFunctions);
$allFunctions = array_map(fn($function) => new FunctionWithNamespacedTypes($function), $allFunctions);
$allFunctions = array_map(fn($function) => new FunctionWithoutInvalidVoidReturnType($function), $allFunctions);

$fileBuilder                = new FileBuilder($allFunctions);
$fileDirector               = new FileDirector($fileBuilder);
$functionToDefinitionString = new FunctionToDefinitionString();

$contractFiles = array_map(function ($function) use ($fileBuilder, $functionToDefinitionString) {
    $upperCaseName = ucfirst($function->getName());
    $file          = $fileBuilder
        ->reset()
        ->setType(FileType::INTERFACE_TYPE)
        ->setName($upperCaseName)
        ->setNamespace('WpService\Contracts')
        ->setFile(dirname(__FILE__) . "/../src/Contracts/{$upperCaseName}.php")
        ->setFunctionsAsStrings([$functionToDefinitionString->functionToString($function)])
        ->getFile();

    file_put_contents($file->getFilePath(), (string)$file);

    return $file;
}, $allFunctions);

$fileDirector->makeServiceInterfaceFile(array_map(fn($file) => "Contracts\\{$file->getName()}", $contractFiles));
$fileDirector->makeNativeFile();
$fileDirector->makeDecoratorFile();
$fileDirector->makeLazyDecoratorFile();
$fileDirector->makeFakeServiceFile();
