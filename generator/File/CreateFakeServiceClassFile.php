<?php

namespace WpService\Generator\File;

use WpService\Generator\Function\FunctionInterface;

class CreateFakeServiceClassFile implements ClassFileInterface
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

            {$formattedFunctions}
        }

        PHP;
    }

    private function formatFunction(FunctionInterface $function): string
    {
        $parameters = $this->getParametersString($function);
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

    private function getParametersString(FunctionInterface $function): string
    {
        $parameters = array_map(function ($parameter) {
            if ($parameter->getDefault() !== null) {
                return "{$parameter->getType()} \${$parameter->getName()} = {$parameter->getDefault()}";
            }

            return $parameter->getType() . ' $' . $parameter->getName();
        }, $function->getParameters());
        return join(", ", $parameters);
    }

    public static function create(string $name, string $namespace, array $implements, array $functions): ClassFileInterface
    {
        return new self($name, $namespace, $implements, $functions);
    }
}
