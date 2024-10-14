<?php

namespace WpService\Contracts;

interface WpSanitizeRedirect
{
/**
 * Sanitizes a URL for use in a redirect.
 *
 * @since 2.3.0
 *
 * @param string $location The path to redirect to.
 * @return string Redirect-sanitized URL.
 */
    public function wpSanitizeRedirect(string $location): string;
}
