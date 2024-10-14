<?php

namespace WpService\Contracts;

interface WpRemoteHead
{
/**
 * Performs an HTTP request using the HEAD method and returns its response.
 *
 * @since 2.7.0
 *
 * @see wp_remote_request() For more information on the response array format.
 * @see WP_Http::request() For default arguments information.
 *
 * @param string $url  URL to retrieve.
 * @param array $args Optional. Request arguments. Default empty array.
 *                     See WP_Http::request() for information on accepted arguments.
 * @return array|\WP_Error The response or WP_Error on failure.
 */
    public function wpRemoteHead(string $url, array $args = []): array|\WP_Error;
}
