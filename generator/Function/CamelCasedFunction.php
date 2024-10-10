<?php

namespace WpService\Generator\Function;

use WpService\Generator\Function\Parameter\CreateParameter;
use WpService\Generator\Function\Parameter\ParameterInterface;

class CamelCasedFunction implements FunctionInterface
{
    private const EXCEPTIONS = [
        '__',
    ];

    public function getOriginalName(): string
    {
        return $this->inner->getOriginalName();
    }

    public function __construct(
        private FunctionInterface $inner
    ) {
    }

    public function getName(): string
    {
        if (in_array($this->inner->getName(), self::EXCEPTIONS)) {
            return $this->inner->getName();
        }

        // Store prefix in $prefix if it is __ or _
        $prefix = '';
        if (strpos($this->inner->getName(), '__') === 0) {
            $prefix = '__';
        } elseif (strpos($this->inner->getName(), '_') === 0) {
            $prefix = '_';
        }

        // Store suffix in $suffix if it is __ or _
        $suffix = '';

        if (strpos($this->inner->getName(), '__') === strlen($this->inner->getName()) - 2) {
            $suffix = '__';
        } elseif (strpos($this->inner->getName(), '_') === strlen($this->inner->getName()) - 1) {
            $suffix = '_';
        }

        return $prefix . $this->camelCase($this->inner->getName()) . $suffix;
    }

    public function getReturnType(): string
    {
        return $this->inner->getReturnType();
    }

    public function getParameters(): array
    {
        return array_map(
            fn (ParameterInterface $param) => CreateParameter::create(
                $param->getType(),
                $this->camelCase($param->getName()),
                $param->isSpread(),
                $param->getDefault()
            ),
            $this->inner->getParameters()
        );
    }

    public function getFunctionBody(): string
    {
        return $this->inner->getFunctionBody();
    }

    public function getDocBlock(): string
    {
        $docBlock = $this->inner->getDocBlock();
        return preg_replace_callback(
            '/@param\s+([^\s]+)\s+\$([^\s]+)/',
            fn (array $matches) => sprintf('@param %s $%s', $matches[1], $this->camelCase($matches[2])),
            $docBlock
        );
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return $this->inner->__toString();
    }

    private function camelCase(string $string): string
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $string))));
    }
}
