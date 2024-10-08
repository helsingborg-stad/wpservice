<?php

namespace WpService\Generator\File;

use WpService\Generator\Function\FunctionInterface;

class CreateLazyDecoratorClassFile implements ClassFileInterface
{
    /**
     * Create a new instance of the class
     *
     * @param string $name
     * @param string $namespace
     * @param array $implements
     * @param string[] $functionsAsStrings
     */
    private function __construct(
        private string $name,
        private string $namespace,
        private array $implements,
        private array $functionsAsStrings
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
        $namespace  = $this->getNamespace();
        $implements = join(", ", $this->getImplements());
        $functions  = implode("\n", $this->functionsAsStrings);

        return <<<PHP
        <?php
        
        namespace {$namespace};

        /**
         * Class {$this->getName()}
         */
        class {$this->getName()} implements {$implements}
        {    
            public ?\WpService\WpService \$inner = null;

            /**
             * Sets the inner WpService instance.
             *
             * @param \WpService\WpService \$inner The inner WpService instance.
             * @return void
             */
            public function setInner(\WpService\WpService \$inner): void
            {
                \$this->inner = \$inner;
            }

            {$functions}
        }

        PHP;
    }

    /**
     * Create a new instance of the class
     *
     * @param string $name
     * @param string $namespace
     * @param array $implements
     * @param FunctionInterface[] $functions
     * @return ClassFileInterface
     */
    public static function create(string $name, string $namespace, array $implements, array $functionsAsStrings): ClassFileInterface
    {
        return new self($name, $namespace, $implements, $functionsAsStrings);
    }
}
