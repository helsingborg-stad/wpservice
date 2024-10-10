<?php

namespace WpService\Generator\Function\Parameter;

use Stringable;

interface ParameterInterface extends Stringable
{
    public function getType(): string;
    public function getName(): string;
    public function getDefault(): ?string;
    public function setType(string $type): void;
    public function setName(string $name): void;
    public function isSpread(): bool;
    public function isByReference(): bool;
}
