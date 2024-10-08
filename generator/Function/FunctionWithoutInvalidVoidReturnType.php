<?php

namespace WpService\Generator\Function;

class FunctionWithoutInvalidVoidReturnType implements FunctionInterface
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
        $returnType = $this->inner->getReturnType();
        $asArray    = explode('|', $returnType);

        if (count($asArray) > 1) {
            $asArray = array_filter($asArray, fn($item) => $item !== 'void');
        }

        return implode('|', $asArray);
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
        return $this->inner->getFunctionBody();
    }
}
