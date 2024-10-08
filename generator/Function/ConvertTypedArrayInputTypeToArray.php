<?php

namespace WpService\Generator\Function;

class ConvertTypedArrayInputTypeToArray implements FunctionInterface
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

    /**
     * @inheritDoc
     */
    public function getParameters(): array
    {
        $params = $this->inner->getParameters();

        foreach ($params as $index => $param) {
            $params[$index]->setType($this->convertTypeToArray($param->getType()));
        }

        return $params;
    }

    private function convertTypeToArray(string $type): string
    {
        // Remove possibly surrounding parentheses
        $type    = trim($type, '()');
        $asArray = explode('|', $type);
        $asArray = array_map(fn($item) => trim($item), $asArray);
        $asArray = array_map(fn($item) => preg_match('/\[\]$/', $item) ? 'array' : $item, $asArray);
        $asArray = array_unique($asArray);

        return implode('|', $asArray);
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
