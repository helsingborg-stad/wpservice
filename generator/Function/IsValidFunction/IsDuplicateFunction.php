<?php

namespace WpService\Generator\Function\IsValidFunction;

use WpService\Generator\Function\FunctionInterface;

/**
 * Class IsDuplicateFunction
 */
class IsDuplicateFunction implements IsValidFunctionInterface
{
    /**
     * Constructor.
     *
     * @param FunctionInterface[] $allFunctions
     * @param IsValidFunctionInterface $inner
     */
    public function __construct(private array $allFunctions, private IsValidFunctionInterface $inner)
    {
    }

    /**
     * @inheritDoc
     */
    public function isValidFunction(FunctionInterface $function): bool
    {
        if (str_starts_with($function->getOriginalName(), 'wp_')) {
            return $this->inner->isValidFunction($function);
        }

        $nameWithPrefix = 'wp_' . $function->getOriginalName();

        foreach ($this->allFunctions as $existingFunction) {
            if ($existingFunction->getOriginalName() === $function->getOriginalName()) {
                return false;
            }
        }

        return $this->inner->isValidFunction($function);
    }
}
