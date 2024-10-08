<?php

namespace WpService\Generator\Function\Parameter;

/**
 * Class SanitizeIntDefaultInput
 */
class SanitizeStringDefaultInput implements ParameterDecoratorInterface
{
    private ParameterInterface $inner;

    /**
     * @inheritDoc
     */
    public function apply(ParameterInterface $inner): ParameterInterface
    {
        $this->inner = $inner;

        return CreateParameter::create(
            $this->getType(),
            $this->inner->getName(),
            $this->inner->getDefault()
        );
    }

    public function getType(): ?string
    {
        if ($this->inner->getType() !== 'string') {
            return $this->inner->getType();
        }

        if ($this->inner->getDefault() === "false") {
            return 'string|false';
        }

        return $this->inner->getType();
    }
}
