<?php

namespace WpService\Generator\Function;

class FunctionWithFakeFunctionBody implements FunctionInterface
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
        $hasReturn  = $this->getReturnType() === 'void';
        $parameters = $this->getParameters();
        $parameters = array_map(fn($param) => '$' . $param->getName(), $parameters);
        $parameters = implode(', ', $parameters);

        $body  = "\$this->registerFunctionCall(__FUNCTION__, func_get_args());";
        $body .= $hasReturn ? "" : "\nreturn \$this->getReturnValue(__FUNCTION__, func_get_args());";

        return $body;
    }
}
