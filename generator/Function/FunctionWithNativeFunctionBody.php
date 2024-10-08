<?php

namespace WpService\Generator\Function;

class FunctionWithNativeFunctionBody implements FunctionInterface
{
    public function __construct(
        private FunctionInterface $inner
    ) {
    }

    public function getOriginalName(): string
    {
        return $this->inner->getOriginalName();
    }

    public function getName(): string
    {
        return $this->inner->getName();
    }

    public function getReturnType(): string
    {
        return $this->inner->getReturnType();
    }

    public function getParameters(): array
    {
        return $this->inner->getParameters();
    }

    public function getDocBlock(): string
    {
        return $this->inner->getDocBlock();
    }

    public function getFunctionBody(): string
    {
        $return = $this->getReturnType() === 'void' ? '' : 'return ';

        $parameters = $this->getParameters();
        $parameters = array_map(fn($param) => '$' . $param->getName(), $parameters);
        $parameters = implode(', ', $parameters);

        return <<<PHP
        {$return}{$this->getOriginalName()}({$parameters});
        PHP;
    }
}
