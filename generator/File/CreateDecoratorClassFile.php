<?php

namespace WpService\Generator\File;

use WpService\Generator\Function\FunctionInterface;

class CreateDecoratorClassFile implements ClassFileInterface
{
    /**
     * Create a new instance of the class.
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
            /**
             * Class constructor.
             *
             * @param \\WpService\\WpService \$inner The inner WPService instance.
             */
            public function __construct(private \\WpService\\WpService \$inner)
            {
            }

            {$functions}
        }

        PHP;
    }

    /**
     * Format a function for the class.
     *
     * @param string $name
     * @param string $namespace
     * @param array $implements
     * @param string[] $functionsAsStrings
     * @return ClassFileInterface
     */
    public static function create(
        string $name,
        string $namespace,
        array $implements,
        array $functionsAsStrings
    ): ClassFileInterface {
        return new self($name, $namespace, $implements, $functionsAsStrings);
    }
}
