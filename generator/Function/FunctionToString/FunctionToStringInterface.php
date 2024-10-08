<?php

namespace WpService\Generator\Function\FunctionToString;

use WpService\Generator\Function\FunctionInterface;

interface FunctionToStringInterface
{
    /**
     * Convert a function to a string for use in a php file.
     *
     * @param FunctionInterface $function
     * @return string
     */
    public function functionToString(FunctionInterface $function): string;
}
