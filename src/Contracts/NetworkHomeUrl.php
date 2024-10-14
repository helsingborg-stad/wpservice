<?php

namespace WpService\Contracts;

interface NetworkHomeUrl
{
/**
 * Retrieves the home URL for the current network.
 *
 * Returns the home URL with the appropriate protocol, 'https' is_ssl()
 * and 'http' otherwise. If `$scheme` is 'http' or 'https', `is_ssl()` is
 * overridden.
 *
 * @since 3.0.0
 *
 * @param string $path   Optional. Path relative to the home URL. Default empty.
 * @param string|null $scheme Optional. Scheme to give the home URL context. Accepts
 *                            'http', 'https', or 'relative'. Default null.
 * @return string Home URL link with optional path appended.
 */
    public function networkHomeUrl(string $path = '', string|null $scheme = null): string;
}
