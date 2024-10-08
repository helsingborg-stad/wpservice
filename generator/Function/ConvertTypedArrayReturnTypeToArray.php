<?php

namespace WpService\Generator\Function;

class ConvertTypedArrayReturnTypeToArray implements FunctionInterface
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
        $returnType = trim($this->inner->getReturnType(), '()');
        $asArray    = explode('|', $returnType);
        $asArray    = array_map(fn($item) => trim($item), $asArray);
        $asArray    = array_map(fn($item) => preg_match('/\[\]$/', $item) ? 'array' : $item, $asArray);
        $asArray    = array_unique($asArray);

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
