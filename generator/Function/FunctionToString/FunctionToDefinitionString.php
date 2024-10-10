<?php

namespace WpService\Generator\Function\FunctionToString;

use WpService\Generator\Function\FunctionInterface;

/**
 * Convert a function to a string for use in a php interface file.
 */
class FunctionToDefinitionString implements FunctionToStringInterface
{
    /**
     * @inheritDoc
     */
    public function functionToString(FunctionInterface $function): string
    {
        $parameters = $this->getParametersString($function);
        $docBlockOutput = empty($function->getDocBlock()) ? '' : $function->getDocBlock() . "\n";
        $functionOutput = "public function {$function->getName()}({$parameters}): {$function->getReturnType()};"; 

        return "{$docBlockOutput}{$functionOutput}";
    }

    /**
     * Get the parameters as a string.
     */
    private function getParametersString(FunctionInterface $function): string
    {
        $parameters = array_map(function ($parameter) {
            $paramName = $parameter->isSpread() ? '...' : '';
            $paramName .= '$';
            $paramName .= $parameter->getName();
            if ($parameter->getDefault() !== null) {
                return "{$parameter->getType()} {$paramName} = {$parameter->getDefault()}";
            }

            return "{$parameter->getType()} {$paramName}";
        }, $function->getParameters());
        return join(", ", $parameters);
    }
}
