<?php

namespace WpService\Contracts;

interface RestAddApplicationPasswordsToIndex
{
    /**
     * Adds Application Passwords info to the REST API index.
     *
     * @since 5.6.0
     *
     * @param \WP_REST_Response $response The index response object.
     * @return \WP_REST_Response
     */
    public function restAddApplicationPasswordsToIndex(\WP_REST_Response $response): \WP_REST_Response;
}
