<?php

namespace WpService\Generator\Function\IsValidFunction;

use WpService\Generator\Function\FunctionInterface;

interface IsValidFunctionInterface
{
    /**
     * @param FunctionInterface $function
     *
     * @return bool
     */
    public function isValidFunction(FunctionInterface $function): bool;
}
