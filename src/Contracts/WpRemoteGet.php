<?php

namespace WpService\Contracts;

use WP_Error;

interface WpRemoteGet
{
    /**
     * Performs an HTTP request using the GET method and returns its response.
     * @see https://developer.wordpress.org/reference/functions/wp_remote_get/
     *
     * @param string $url  URL to retrieve.
     * @param array  $args Optional. Request arguments. Default empty array.
     *                     See WP_Http::request() for information on accepted arguments.
     * @return array|WP_Error The response or WP_Error on failure.
     */
    public function wpRemoteGet(string $url, array $args = []): array|WP_Error;
}
