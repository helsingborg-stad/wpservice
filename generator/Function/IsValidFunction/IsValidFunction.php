<?php

namespace WpService\Generator\Function\IsValidFunction;

use WpService\Generator\Function\FunctionInterface;

/**
 * Class IsValidFunction
 */
class IsValidFunction implements IsValidFunctionInterface
{
    /**
     * Constructor.
     */
    private function __construct()
    {
    }

    /**
     * @inheritDoc
     */
    public function isValidFunction(FunctionInterface $function): bool
    {
        return true;
    }

    /**
     * Create an instance of the class
     *
     * @return IsValidFunctionInterface
     */
    public static function create(): IsValidFunctionInterface
    {
        return new self();
    }
}
