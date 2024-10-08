<?php

namespace WpService\Generator\File;

class CreateFakeServiceClassFile implements ClassFileInterface
{
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
        $functions  = implode("\n\n", $this->functionsAsStrings);

        return <<<PHP
        <?php
        
        namespace {$namespace};

        /**
         * Class {$this->getName()}
         */
        class {$this->getName()} implements {$implements}
        {    
            public array \$methodCalls = [];

            /**
             * Class constructor.
             *
             * @param array \$returnValues
             */
            public function __construct(private array \$returnValues = [])
            {
            }

            /**
             * Registers a function call.
             *
             * @param string \$method
             * @param array \$methodArguments
             */
            private function registerFunctionCall(string \$method, array \$methodArguments): void
            {
                if (!isset(\$this->methodCalls[\$method])) {
                    \$this->methodCalls[\$method] = [];
                }

                \$this->methodCalls[\$method][] = \$methodArguments;
            }

            /**
             * Retrieves the return value for a given method.
             *
             * @param string \$method The name of the method.
             * @param array \$methodArgs The arguments to be passed to the method.
             * @param mixed \$default The default value to return if the method does not have a return value.
             * @return mixed The return value of the method, or the default value if the method does not have a return value.
             */
            private function getReturnValue(\$method, array \$methodArgs = [], \$default = null): mixed
            {
                if (!isset(\$this->returnValues[\$method])) {
                    return \$default;
                }

                if (is_callable(\$this->returnValues[\$method])) {
                    return \$this->returnValues[\$method](...\$methodArgs);
                }

                return \$this->returnValues[\$method] ?? \$default;
            }

            {$functions}
        }

        PHP;
    }

    /**
     * @param string $name
     * @param string $namespace
     * @param array $implements
     * @param string[] $functionsAsStrings
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
