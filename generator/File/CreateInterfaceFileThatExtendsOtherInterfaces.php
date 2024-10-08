<?php

namespace WpService\Generator\File;

class CreateInterfaceFileThatExtendsOtherInterfaces implements InterfaceFileInterface
{
    /**
     * @param string $name
     * @param InterfaceFileInterface[] $extends
     */
    private function __construct(private string $name, private array $extends, private string $namespace)
    {
    }

    public function getFileName(): string
    {
        return $this->getName() . '.php';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * @inheritDoc
     */
    public function getExtends(): array
    {
        return $this->extends;
    }

    public function __toString(): string
    {
        $namespace        = $this->getNamespace();
        $contract         = "<?php\n\nnamespace {$namespace};\n\n";
        $contract        .= "interface WpService extends\n";
        $contractNameList = array_map(fn($interface) => '\\' . $interface->getNamespace() . '\\' . ucfirst($interface->getName()), $this->getExtends());
        sort($contractNameList);
        $contract .= implode(",\n", $contractNameList) . "\n";
        $contract .= "{\n";
        $contract .= "}";

        return $contract;
    }

    /**
     * @param string $name
     * @param InterfaceFileInterface[] $extends
     */
    public static function create(string $name, array $extends, string $namespace): InterfaceFileInterface
    {
        return new self($name, $extends, $namespace);
    }
}
