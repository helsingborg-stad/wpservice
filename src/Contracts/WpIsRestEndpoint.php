<?php

namespace WpService\Contracts;

interface WpIsRestEndpoint
{
    /**
 * Checks whether a REST API endpoint request is currently being handled.
 *
 * This may be a standalone REST API request, or an internal request dispatched from within a regular page load.
 *
 * @since 6.5.0
 *
 * @global WP_REST_Server $wp_rest_server REST server instance.
 *
 * @return bool True if a REST endpoint request is currently being handled, false otherwise.
 */
    public function wpIsRestEndpoint(): bool;
}
