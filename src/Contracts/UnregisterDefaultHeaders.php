<?php

namespace WpService\Contracts;

interface UnregisterDefaultHeaders
{
    /**
 * Unregisters default headers.
 *
 * This function must be called after register_default_headers() has already added the
 * header you want to remove.
 *
 * @see register_default_headers()
 * @since 3.0.0
 *
 * @global array $_wp_default_headers
 *
 * @param string|array $header The header string id (key of array) to remove, or an array thereof.
 * @return bool|void A single header returns true on success, false on failure.
 *                   There is currently no return value for multiple headers.
 */
    public function unregisterDefaultHeaders(string|array $header): bool;
}
