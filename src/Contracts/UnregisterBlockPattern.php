<?php

namespace WpService\Contracts;

interface UnregisterBlockPattern
{
/**
 * Unregisters a block pattern.
 *
 * @since 5.5.0
 *
 * @param string $patternName Block pattern name including namespace.
 * @return bool True if the pattern was unregistered with success and false otherwise.
 */
    public function unregisterBlockPattern(string $patternName): bool;
}
