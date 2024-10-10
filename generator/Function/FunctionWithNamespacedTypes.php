<?php

namespace WpService\Generator\Function;

class FunctionWithNamespacedTypes implements FunctionInterface
{
    private const BASIC_TYPES = [
        'int',
        'string',
        'bool',
        'float',
        'array',
        'callable',
        'iterable',
        'object',
        'mixed',
        'void',
        'true',
        'false',
        'null'
    ];

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
        return $this->nameSpaceType($this->inner->getReturnType());
    }

    public function getParameters(): array
    {
        // Clone to be able to use in getDocBlock method without reference.
        $params = array_map(fn($param) => clone $param, $this->inner->getParameters());

        foreach ($params as $index => $param) {
            if (empty($param->getType())) {
                continue;
            }

            $params[$index]->setType($this->nameSpaceType($param->getType()));
        }

        return $params;
    }

    public function getDocBlock(): string
    {
        $docBlock    = $this->inner->getDocBlock();
        $innerParams = $this->inner->getParameters();
        $params      = $this->getParameters();

        foreach ($innerParams as $index => $innerParam) {
            $docBlock = str_replace('@param ' . $innerParam->getType(), '@param ' . $params[$index]->getType(), $docBlock);
        }

        return str_replace('@return ' . $this->inner->getReturnType(), '@return ' . $this->getReturnType(), $docBlock);
    }

    public function getFunctionBody(): string
    {
        return $this->inner->getFunctionBody();
    }

    private function nameSpaceType(string $type): string
    {
        $asArray = explode('|', $type);
        $asArray = array_map(fn($item) => trim($item), $asArray);
        $asArray = array_map(fn($item) => ltrim($item, "\\"), $asArray);
        $asArray = array_map(fn($item) => in_array($item, self::BASIC_TYPES) ? $item : '\\' . $item, $asArray);

        return implode('|', $asArray);
    }
}
