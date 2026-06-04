<?php

namespace WpService\Generator\Function\Parameter;

class CreateParameter implements ParameterInterface
{
    private function __construct(
        private string $type,
        private string $name,
        private bool $spread,
        private bool $byReference,
        private ?string $default
    ) {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDefault(): ?string
    {
        return $this->default ?? null;
    }

    public function isSpread(): bool
    {
        return $this->spread;
    }

    public function isByReference(): bool
    {
        return $this->byReference;
    }

    public function __toString(): string
    {
        $type = $this->getType();

        if ($type && $this->getDefault() === 'null' && !$this->typeIsNullable($type) && $type !== 'mixed') {
            $type .= '|null';
        }

        $param  = $type ? $type . ' ' : '';
        $param .= $this->isByReference() ? '&' : '';
        $param .= $this->isSpread() ? '...' : '';
        $param .= '$';
        $param .= $this->getName();
        $param .= empty($this->getDefault()) && $this->getDefault() !== '0' ? '' : ' = ' . $this->getDefault();

        return $param;
    }

    private function typeIsNullable(string $type): bool
    {
        if (str_starts_with($type, '?')) {
            return true;
        }

        $types = array_map('trim', explode('|', $type));
        return in_array('null', $types, true);
    }

    public static function create(string $type, string $name, bool $spread, bool $byReference, ?string $default): ParameterInterface
    {
        return new self($type, $name, $spread, $byReference, $default);
    }
}
