<?php

namespace WpService\Generator\Function;

class FunctionWihoutLeadingWpInName implements FunctionInterface
{
    private const EXCEPTIONS = [
        'wp_die',
        'wp_readonly'
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
        if (in_array($this->inner->getOriginalName(), self::EXCEPTIONS)) {
            return $this->inner->getName();
        }

        $name = $this->inner->getName();

        if (strlen($name) > 2 && strpos($name, 'wp') === 0) {
            $name = substr($name, 2);
            $name = lcfirst($name);
        }

        return $name;
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
        return $this->inner->getFunctionBody();
    }
}
