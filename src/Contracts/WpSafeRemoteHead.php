<?php

namespace WpService\Contracts;

interface WpSafeRemoteHead
{
    /**
 * Retrieves the raw response from a safe HTTP request using the HEAD method.
 *
 * This function is ideal when the HTTP request is being made to an arbitrary
 * URL. The URL, and every URL it redirects to, are validated with wp_http_validate_url()
 * to avoid Server Side Request Forgery attacks (SSRF).
 *
 * @since 3.6.0
 *
 * @see wp_remote_request() For more information on the response array format.
 * @see WP_Http::request() For default arguments information.
 * @see wp_http_validate_url() For more information about how the URL is validated.
 *
 * @link https://owasp.org/www-community/attacks/Server_Side_Request_Forgery
 *
 * @param string $url  URL to retrieve.
 * @param array $args Optional. Request arguments. Default empty array.
 *                     See WP_Http::request() for information on accepted arguments.
 * @return array|\WP_Error The response or WP_Error on failure.
 */
    public function wpSafeRemoteHead(string $url, array $args): array|\WP_Error;
}
