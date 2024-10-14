<?php

namespace WpService\Contracts;

interface RestCookieCheckErrors
{
/**
 * Checks for errors when using cookie-based authentication.
 *
 * WordPress' built-in cookie authentication is always active
 * for logged in users. However, the API has to check nonces
 * for each request to ensure users are not vulnerable to CSRF.
 *
 * @since 4.4.0
 *
 * @global mixed          $wp_rest_auth_cookie
 *
 * @param WP_Error|mixed $result Error from another authentication handler,
 *                               null if we should handle it, or another value if not.
 * @return WP_Error|mixed|bool WP_Error if the cookie is invalid, the $result, otherwise true.
 */
    public function restCookieCheckErrors(mixed $result): mixed;
}
