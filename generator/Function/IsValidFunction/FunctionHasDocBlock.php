<?php

namespace WpService\Generator\Function\IsValidFunction;

use WpService\Generator\Function\FunctionInterface;

/**
 * Class FunctionHasDocBlock
 *
 * Check if the function has a doc block
 */
class FunctionHasDocBlock implements IsValidFunctionInterface
{
    /**
     * Constructor.
     */
    public function __construct(private IsValidFunctionInterface $inner)
    {
    }

    /**
     * @inheritDoc
     */
    public function isValidFunction(FunctionInterface $function): bool
    {
        $valid = $this->inner->isValidFunction($function);

        if (!$valid) {
            return false;
        }

        return !empty($function->getDocBlock());
    }
}
