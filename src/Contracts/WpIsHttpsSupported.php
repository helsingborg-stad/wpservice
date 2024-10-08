<?php

namespace WpService\Contracts;

interface WpIsHttpsSupported
{
    /**
 * Checks whether HTTPS is supported for the server and domain.
 *
 * @since 5.7.0
 *
 * @return bool True if HTTPS is supported, false otherwise.
 */
    public function wpIsHttpsSupported(): bool;
}
