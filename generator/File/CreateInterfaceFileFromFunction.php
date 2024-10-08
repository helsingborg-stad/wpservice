<?php

namespace WpService\Generator\File;

use WpService\Generator\Function\FunctionInterface;

class CreateInterfaceFileFromFunction implements InterfaceFileInterface
{
    private function __construct(private FunctionInterface $function, private string $namespace)
    {
    }

    public function getFileName(): string
    {
        return $this->getName() . '.php';
    }

    public function getName(): string
    {
        return ucfirst($this->function->getName());
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
        $contractName = ucfirst($this->function->getName());
        $returnType   = $this->function->getReturnType();
        $params       = $this->function->getParameters();
        $functionName = $this->function->getName();
        $docBlock     = $this->function->getDocBlock();
        $namespace    = $this->getNamespace();

        $contract  = "<?php\n\nnamespace {$namespace};\n\n";
        $contract .= "interface $contractName\n{\n";
        $contract .= "    {$docBlock}\n";
        $contract .= "    public function $functionName(";
        $contract .= implode(', ', array_map(function ($param) {
            return $param->getType() . ' $' . $param->getName();
        }, $params));
        $contract .= "): $returnType;\n}";

        return $contract;
    }

    public static function create(FunctionInterface $function, string $namespace): InterfaceFileInterface
    {
        return new self($function, $namespace);
    }
}
