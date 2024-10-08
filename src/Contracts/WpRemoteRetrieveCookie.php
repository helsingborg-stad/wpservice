<?php

namespace WpService\Contracts;

interface WpRemoteRetrieveCookie
{
    /**
 * Retrieves a single cookie by name from the raw response.
 *
 * @since 4.4.0
 *
 * @param array|\WP_Error $response HTTP response.
 * @param string $name     The name of the cookie to retrieve.
 * @return \WP_Http_Cookie|string The `WP_Http_Cookie` object, or empty string
 *                               if the cookie is not present in the response.
 */
    public function wpRemoteRetrieveCookie(array|\WP_Error $response, string $name): \WP_Http_Cookie|string;
}
