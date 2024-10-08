<?php

namespace WpService\Contracts;

interface RegisterBlockPattern
{
    /**
     * Registers a new block pattern.
     *
     * @since 5.5.0
     *
     * @param string $patternName       Block pattern name including namespace.
     * @param array $patternProperties List of properties for the block pattern.
     *                                   See WP_Block_Patterns_Registry::register() for accepted arguments.
     * @return bool True if the pattern was registered with success and false otherwise.
     */
    public function registerBlockPattern(string $patternName, array $patternProperties): bool;
}
