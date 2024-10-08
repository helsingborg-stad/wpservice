<?php

namespace WpService\Generator\Function\IsValidFunction;

use WpService\Generator\Function\FunctionInterface;

/**
 * Class IsPrivateFunction
 *
 * Check if the function is private
 */
class IsPrivateFunction implements IsValidFunctionInterface
{
    private const EXCEPTIONS = [
        '__',
        '_e',
        '_n',
        '_x',
        '_ex',
        '_nx',
        '_nx_noop',
        '_n_noop',
    ];

    /**
     * Constructor.
     */
    public function __construct(private IsValidFunctionInterface $inner)
    {
    }

    /**
     * @inheritDoc
     */
    public function isValidFunction(FunctionInterface $function): bool
    {
        $valid = $this->inner->isValidFunction($function);

        if (!$valid) {
            return false;
        }

        if (in_array($function->getOriginalName(), self::EXCEPTIONS)) {
            return true;
        }

        return !str_starts_with($function->getOriginalName(), '_');
    }
}
