<?php

namespace WpService\Contracts;

interface RestHandleDeprecatedFunction
{
/**
 * Handles _deprecated_function() errors.
 *
 * @since 4.4.0
 *
 * @param string $functionName The function that was called.
 * @param string $replacement   The function that should have been called.
 * @param string $version       Version.
 */
    public function restHandleDeprecatedFunction(string $functionName, string $replacement, string $version): void;
}
