<?php

namespace WpService\Contracts;

interface RestHandleDeprecatedArgument
{
    /**
     * Handles _deprecated_argument() errors.
     *
     * @since 4.4.0
     *
     * @param string $functionName The function that was called.
     * @param string $message       A message regarding the change.
     * @param string $version       Version.
     */
    public function restHandleDeprecatedArgument(string $functionName, string $message, string $version): void;
}
