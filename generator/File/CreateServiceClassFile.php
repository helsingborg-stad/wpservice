<?php

namespace WpService\Generator\File;

use WpService\Generator\Function\FunctionInterface;

class CreateServiceClassFile implements ClassFileInterface
{
    private function __construct(
        private string $name,
        private string $namespace,
        private array $implements,
        private array $functions
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFileName(): string
    {
        return $this->getName() . '.php';
    }

    public function getFunctions(): array
    {
        return $this->functions;
    }

    /**
     * @inheritDoc
     */
    public function getImplements(): array
    {
        return $this->implements;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function __toString(): string
    {
        $namespace          = $this->getNamespace();
        $implements         = join(", ", $this->getImplements());
        $formattedFunctions = array_map(
            fn (FunctionInterface $function) => $this->formatFunction($function),
            $this->getFunctions()
        );
        $formattedFunctions = join("\n", $formattedFunctions);

        return <<<PHP
        <?php
        
        namespace {$namespace};

        /**
         * Class {$this->getName()}
         */
        class {$this->getName()} implements {$implements}
        {
            {$formattedFunctions}
        }

        PHP;
    }

    private function formatFunction(FunctionInterface $function): string
    {
        $parameters = $function->getParameters();
        $parameters = array_map(fn ($parameter) => $parameter->getType() . ' $' . $parameter->getName(), $parameters);
        $parameters = join(", ", $parameters);
        return <<<PHP
        /**
         * @inheritDoc
         */
        public function {$function->getName()}({$parameters}): {$function->getReturnType()}
        {
            {$function->getFunctionBody()}
        }
        PHP;
    }

    public static function create(string $name, string $namespace, array $implements, array $functions): ClassFileInterface
    {
        return new self($name, $namespace, $implements, $functions);
    }
}
