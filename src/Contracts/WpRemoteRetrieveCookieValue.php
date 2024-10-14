<?php

namespace WpService\Contracts;

interface WpRemoteRetrieveCookieValue
{
/**
 * Retrieves a single cookie's value by name from the raw response.
 *
 * @since 4.4.0
 *
 * @param array|\WP_Error $response HTTP response.
 * @param string $name     The name of the cookie to retrieve.
 * @return string The value of the cookie, or empty string
 *                if the cookie is not present in the response.
 */
    public function wpRemoteRetrieveCookieValue(array|\WP_Error $response, string $name): string;
}
