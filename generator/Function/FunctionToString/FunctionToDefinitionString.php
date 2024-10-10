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
        $parameters     = array_map(fn ($parameter) => $parameter->__toString(), $function->getParameters());
        $parameters     = join(", ", $parameters);
        $docBlockOutput = empty($function->getDocBlock()) ? '' : $function->getDocBlock() . "\n";
        $functionOutput = "public function {$function->getName()}({$parameters}): {$function->getReturnType()};";

        return "{$docBlockOutput}{$functionOutput}";
    }
}
