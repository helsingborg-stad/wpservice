<?php

namespace WpService\Contracts;

interface WpRemoteRequest
{
/**
 * Performs an HTTP request and returns its response.
 *
 * There are other API functions available which abstract away the HTTP method:
 *
 *  - Default 'GET'  for wp_remote_get()
 *  - Default 'POST' for wp_remote_post()
 *  - Default 'HEAD' for wp_remote_head()
 *
 * Important: If the URL is user-controlled, use `wp_safe_remote_request()` instead.
 *
 * @since 2.7.0
 *
 * @see WP_Http::request() For information on default arguments.
 *
 * @param string $url  URL to retrieve.
 * @param array $args Optional. Request arguments. Default empty array.
 *                     See WP_Http::request() for information on accepted arguments.
 * @return array|\WP_Error The response array or a WP_Error on failure.
 *                        See WP_Http::request() for information on return value.
 */
    public function wpRemoteRequest(string $url, array $args = []): array|\WP_Error;
}
