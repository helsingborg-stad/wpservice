<?php

namespace WpService\Generator\Function;

use Stringable;

interface FunctionInterface
{
    /**
     * Get the original name of the function
     *
     * @return string
     */
    public function getOriginalName(): string;

    /**
     * Get the name of the function
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get the return type of the function
     *
     * @return string
     */
    public function getReturnType(): string;

    /**
     * Get the parameters of the function
     *
     * @return FunctionParamInterface[]
     */
    public function getParameters(): array;

    /**
     * Get the docblock of the function
     *
     * @return string
     */
    public function getDocBlock(): string;

    /**
     * Get the body of the function
     */
    public function getFunctionBody(): string;
}
