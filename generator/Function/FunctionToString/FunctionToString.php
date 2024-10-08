<?php

namespace WpService\Generator\Function\FunctionToString;

use WpService\Generator\Function\FunctionInterface;

/**
 * Convert a function to a string for use in a php file.
 */
class FunctionToString implements FunctionToStringInterface
{
    /**
     * @inheritDoc
     */
    public function functionToString(FunctionInterface $function): string
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

    /**
     * Get the parameters as a string.
     */
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
}
