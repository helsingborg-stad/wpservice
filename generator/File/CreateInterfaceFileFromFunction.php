<?php

namespace WpService\Generator\File;

use WpService\Generator\Function\FunctionInterface;

class CreateInterfaceFileFromFunction implements InterfaceFileInterface
{
    private function __construct(
        private string $name,
        private string $namespace,
        private string $functionAsString
    ) {
    }

    public function getFileName(): string
    {
        return $this->getName() . '.php';
    }

    public function getName(): string
    {
        return ucfirst($this->name);
    }

    /**
     * @inheritDoc
     */
    public function getExtends(): array
    {
        return [];
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function __toString(): string
    {
        $contractName = ucfirst($this->getName());
        $namespace    = $this->getNamespace();

        $contract  = "<?php\n\nnamespace {$namespace};\n\n";
        $contract .= "interface $contractName\n{\n";
        $contract .= "    {$this->functionAsString}\n";
        $contract .= "}\n";

        return $contract;
    }

    public static function create(string $name, string $namespace, string $functionAsString): InterfaceFileInterface
    {
        return new self($name, $namespace, $functionAsString);
    }
}
