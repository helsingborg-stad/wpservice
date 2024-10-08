<?php

namespace WpService\Generator\Function\IsValidFunction;

use WpService\Generator\Function\FunctionInterface;

/**
 * Class InvalidateDeprecatedFunction
 */
class InvalidateDeprecatedFunction implements IsValidFunctionInterface
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

        if (str_contains($function->getDocBlock(), '@deprecated')) {
            return false;
        }

        return $this->inner->isValidFunction($function);
    }
}
