<?php

namespace WpService\Contracts;

interface RestGetServer
{
    /**
     * Retrieves the current REST server instance.
     *
     * Instantiates a new instance if none exists already.
     *
     * @since 4.5.0
     *
     * @global WP_REST_Server $wp_rest_server REST server instance.
     *
     * @return \WP_REST_Server REST server instance.
     */
    public function restGetServer(): \WP_REST_Server;
}
