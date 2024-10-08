<?php

namespace WpService\Contracts;

interface WpLoginUrl
{
    /**
 * Retrieves the login URL.
 *
 * @since 2.7.0
 *
 * @param string $redirect     Path to redirect to on log in.
 * @param bool $forceReauth Whether to force reauthorization, even if a cookie is present.
 *                             Default false.
 * @return string The login URL. Not HTML-encoded.
 */
    public function wpLoginUrl(string $redirect = '', bool $forceReauth = false): string;
}
