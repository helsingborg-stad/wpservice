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
        $paramName  = $this->isByReference() ? '&' : '';
        $paramName .= $this->isSpread() ? '...' : '';
        $paramName .= '$';
        $paramName .= $this->getName();

        if ($this->getDefault() !== null) {
            return "{$this->getType()} {$paramName} = {$this->getDefault()}";
        }

            return "{$this->getType()} {$paramName}";
    }

    public static function create(string $type, string $name, bool $spread, bool $byReference, ?string $default): ParameterInterface
    {
        return new self($type, $name, $spread, $byReference, $default);
    }
}
