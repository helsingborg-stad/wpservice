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
        $parameters = array_map(fn ($parameter) => $parameter->__toString(), $function->getParameters());
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
}
