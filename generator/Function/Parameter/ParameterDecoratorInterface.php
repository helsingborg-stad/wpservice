<?php

namespace WpService\Generator\Function\Parameter;

interface ParameterDecoratorInterface
{
    /**
     * Apply the decorator to the inner parameter
     *
     * @param ParameterInterface $inner
     * @return ParameterInterface
     */
    public function apply(ParameterInterface $inner): ParameterInterface;
}
