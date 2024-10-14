<?php

namespace WpService\Contracts;

interface WpTrustedKeys
{
/**
 * Retrieves the list of signing keys trusted by WordPress.
 *
 * @since 5.2.0
 *
 * @return string[] Array of base64-encoded signing keys.
 */
    public function wpTrustedKeys(): array;
}
