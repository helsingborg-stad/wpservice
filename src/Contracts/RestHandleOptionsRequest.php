<?php

namespace WpService\Contracts;

interface RestHandleOptionsRequest
{
    /**
     * Handles OPTIONS requests for the server.
     *
     * This is handled outside of the server code, as it doesn't obey normal route
     * mapping.
     *
     * @since 4.4.0
     *
     * @param mixed $response Current response, either response or `null` to indicate pass-through.
     * @param \WP_REST_Server $handler  ResponseHandler instance (usually WP_REST_Server).
     * @param \WP_REST_Request $request  The request that was used to make current response.
     * @return \WP_REST_Response Modified response, either response or `null` to indicate pass-through.
     */
    public function restHandleOptionsRequest(mixed $response, \WP_REST_Server $handler, \WP_REST_Request $request): \WP_REST_Response;
}
