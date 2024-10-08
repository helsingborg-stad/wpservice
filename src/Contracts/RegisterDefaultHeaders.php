<?php

namespace WpService\Contracts;

interface RegisterDefaultHeaders
{
    /**
 * Registers a selection of default headers to be displayed by the custom header admin UI.
 *
 * @since 3.0.0
 *
 * @global array $_wp_default_headers
 *
 * @param array $headers Array of headers keyed by a string ID. The IDs point to arrays
 *                       containing 'url', 'thumbnail_url', and 'description' keys.
 */
    public function registerDefaultHeaders(array $headers): void;
}
