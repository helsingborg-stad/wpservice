<?php

namespace WpService\Contracts;

interface RestSendAllowHeader
{
/**
 * Sends the "Allow" header to state all methods that can be sent to the current route.
 *
 * @since 4.4.0
 *
 * @param \WP_REST_Response $response Current response being served.
 * @param \WP_REST_Server $server   ResponseHandler instance (usually WP_REST_Server).
 * @param \WP_REST_Request $request  The request that was used to make current response.
 * @return \WP_REST_Response Response to be served, with "Allow" header if route has allowed methods.
 */
    public function restSendAllowHeader(\WP_REST_Response $response, \WP_REST_Server $server, \WP_REST_Request $request): \WP_REST_Response;
}
