<?php

namespace WpService\Contracts;

interface WpGetExtensionErrorDescription
{
/**
 * Get a human readable description of an extension's error.
 *
 * @since 5.2.0
 *
 * @param array $error Error details from `error_get_last()`.
 * @return string Formatted error description.
 */
    public function wpGetExtensionErrorDescription(array $error): string;
}
