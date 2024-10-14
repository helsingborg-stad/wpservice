<?php

namespace WpService\Generator\File;

/**
 * File
 */
class File implements FileInterface
{
    /**
     * Constructor
     */
    public function __construct(
        private string $name,
        private string $namespace,
        private FileType $type,
        private array $implements,
        private array $extends,
        private string $filePath,
        private array $functions
    ) {
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * @inheritDoc
     */
    public function getType(): FileType
    {
        return $this->type;
    }

    /**
     * @inheritDoc
     */
    public function getImplements(): array
    {
        return $this->implements;
    }

    /**
     * @inheritDoc
     */
    public function getExtends(): array
    {
        return $this->extends;
    }

    /**
     * @inheritDoc
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @inheritDoc
     */
    public function getFunctions(): array
    {
        return $this->functions;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        $extends = join(",\n", $this->getExtends());
        $extends = $extends ? " extends {$extends}" : '';

        $implements = join(",\n", $this->getImplements());
        $implements = $implements ? " implements {$implements}" : '';


        $namespace  = $this->getNamespace() ? "namespace {$this->getNamespace()};\n\n" : '';
        $functions  = implode("\n\n", $this->getFunctions());
        $docblock   = $this->getType() === FileType::CLASS_TYPE ? "/**\n * {$this->getType()->value} {$this->getName()}\n */\n" : '';
        $definition = "{$this->getType()->value} {$this->getName()}{$extends}{$implements}\n{\n{$functions}\n}";
        $content    = "<?php\n\n{$namespace}{$docblock}{$definition}";

        return $content;
    }
}
