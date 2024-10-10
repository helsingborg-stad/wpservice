<?php

namespace WpService\Generator\Function\Parameter;

/**
 * Class SanitizeCallbackDefaultInput
 */
class SanitizeCallbackDefaultInput implements ParameterDecoratorInterface
{
    private ParameterInterface $inner;

    /**
     * @inheritDoc
     */
    public function apply(ParameterInterface $inner): ParameterInterface
    {
        $this->inner = $inner;

        return CreateParameter::create(
            $this->inner->getType(),
            $this->inner->getName(),
            $this->inner->isSpread(),
            $this->getDefault() ?? null
        );
    }

    public function getDefault(): ?string
    {
        if ($this->inner->getType() !== 'callable') {
            return $this->inner->getDefault();
        }

        if ($this->inner->getDefault() === null) {
            return $this->inner->getDefault();
        }

        return 'null';
    }
}
