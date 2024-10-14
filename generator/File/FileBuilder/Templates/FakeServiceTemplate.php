<?php

namespace WpService\Generator\File\FileBuilder\Templates;

/**
 * FakeServiceTemplate
 */
class FakeServiceTemplate implements TemplateInterface
{
    /**
     * @inheritDoc
     */
    public function getTemplateFunctions(): array
    {
        return [
            "public array \$methodCalls = [];",
            "
            /**
             * Class constructor.
             *
             * @param array \$returnValues
             */
            public function __construct(private array \$returnValues = []) {}",
            "
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
            }",
            "
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
            }"
        ];
    }
}
