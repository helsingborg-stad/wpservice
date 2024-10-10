<?php

namespace WpService\Generator\Function\Parameter;

/**
 * Class SanitizeIntDefaultInput
 */
class SanitizeIntDefaultInput implements ParameterDecoratorInterface
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
            $this->inner->isSpread(),
            $this->inner->isByReference(),
            $this->inner->getDefault()
        );
    }

    public function getType(): ?string
    {
        $types   = explode('|', $this->inner->getType());
        $default = $this->inner->getDefault();

        if ($default === 'false' && !in_array('false', $types) && !in_array('bool', $types)) {
            $types[] = 'false';
        }

        if ($default === 'true' && !in_array('true', $types) && !in_array('bool', $types)) {
            $types[] = 'true';
        }

        if ($default === "''" && !in_array('string', $types)) {
            $types[] = 'string';
        }

        return implode('|', $types);
    }
}
