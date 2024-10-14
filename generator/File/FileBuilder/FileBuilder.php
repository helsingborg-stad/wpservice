<?php

namespace WpService\Generator\File\FileBuilder;

use WpService\Generator\File\File;
use WpService\Generator\File\FileBuilder\Templates\DecoratorServiceTemplate;
use WpService\Generator\File\FileBuilder\Templates\FakeServiceTemplate;
use WpService\Generator\File\FileBuilder\Templates\LazyDecoratorServiceTemplate;
use WpService\Generator\File\FileInterface;
use WpService\Generator\File\FileType;
use WpService\Generator\Function\FunctionToString\FunctionToString;
use WpService\Generator\Function\FunctionWithDecoratorFunctionBody;
use WpService\Generator\Function\FunctionWithFakeFunctionBody;
use WpService\Generator\Function\FunctionWithNativeFunctionBody;

/**
 * FileBuilder
 */
class FileBuilder implements FileBuilderInterface
{
    private string $name      = '';
    private string $namespace = '';
    private FileType $type;
    private array $implements         = [];
    private array $extends            = [];
    private string $file              = '';
    private array $functionsAsStrings = [];

    /**
     * Constructor
     *
     * @param  \WpService\Generator\Function\FunctionInterface[] $functions
     */
    public function __construct(private array $originalFunctions = [])
    {
    }

    /**
     * @inheritDoc
     */
    public function reset(): FileBuilderInterface
    {
        $this->name               = '';
        $this->namespace          = '';
        $this->type               = FileType::CLASS_TYPE;
        $this->implements         = [];
        $this->extends            = [];
        $this->file               = '';
        $this->functionsAsStrings = [];

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setNamespace($namespace): FileBuilderInterface
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name): FileBuilderInterface
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setType(FileType $type): FileBuilderInterface
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setImplements($implements): FileBuilderInterface
    {
        $this->implements = $implements;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setExtends($extends): FileBuilderInterface
    {
        $this->extends = $extends;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setFunctionsAsStrings(array $functionsAsStrings): FileBuilderInterface
    {
        $this->functionsAsStrings = $functionsAsStrings;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function withNativeFunctions(): FileBuilderInterface
    {
        $functionToString = new FunctionToString();
        $functions        = array_map(fn($function) => new FunctionWithNativeFunctionBody($function), $this->originalFunctions);
        $functions        = array_map(fn($function) => $functionToString->functionToString($function), $functions);

        $this->functionsAsStrings = $functions;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function withDecoratorFunctions(): FileBuilderInterface
    {
        $functionToString = new FunctionToString();
        $functions        = array_map(fn($function) => new FunctionWithDecoratorFunctionBody($function), $this->originalFunctions);
        $functions        = array_map(fn($function) => $functionToString->functionToString($function), $functions);
        array_unshift($functions, ...(new DecoratorServiceTemplate())->getTemplateFunctions());

        $this->functionsAsStrings = $functions;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function withLazyDecoratorFunctions(): FileBuilderInterface
    {
        $functionToString = new FunctionToString();
        $functions        = array_map(fn($function) => new FunctionWithDecoratorFunctionBody($function), $this->originalFunctions);
        $functions        = array_map(fn($function) => $functionToString->functionToString($function), $functions);
        array_unshift($functions, ...(new LazyDecoratorServiceTemplate())->getTemplateFunctions());

        $this->functionsAsStrings = $functions;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function withFakeFunctions(): FileBuilderInterface
    {
        $functionToString = new FunctionToString();
        $functions        = array_map(fn($function) => new FunctionWithFakeFunctionBody($function), $this->originalFunctions);
        $functions        = array_map(fn($function) => $functionToString->functionToString($function), $functions);
        array_unshift($functions, ...(new FakeServiceTemplate())->getTemplateFunctions());

        $this->functionsAsStrings = $functions;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setFile($file): FileBuilderInterface
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getFile(): FileInterface
    {
        return new File(
            $this->name,
            $this->namespace,
            $this->type,
            $this->implements,
            $this->extends,
            $this->file,
            $this->functionsAsStrings
        );
    }
}
