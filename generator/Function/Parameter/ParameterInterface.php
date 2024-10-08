<?php

namespace WpService\Generator\Function\Parameter;

interface ParameterInterface
{
    public function getType(): string;
    public function getName(): string;
    public function getDefault(): ?string;
    public function setType(string $type): void;
    public function setName(string $name): void;
}
