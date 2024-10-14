<?php

namespace WpService\Contracts;

interface WpGetNocacheHeaders
{
/**
 * Gets the HTTP header information to prevent caching.
 *
 * The several different headers cover the different ways cache prevention
 * is handled by different browsers.
 *
 * @since 2.8.0
 * @since 6.3.0 The `Cache-Control` header for logged in users now includes the
 *              `no-store` and `private` directives.
 *
 * @return array The associative array of header names and field values.
 */
    public function wpGetNocacheHeaders(): array;
}
