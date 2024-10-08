<?php

namespace WpService\Contracts;

interface RestFilterResponseFields
{
    /**
 * Filters the REST API response to include only an allow-listed set of response object fields.
 *
 * @since 4.8.0
 *
 * @param \WP_REST_Response $response Current response being served.
 * @param \WP_REST_Server $server   ResponseHandler instance (usually WP_REST_Server).
 * @param \WP_REST_Request $request  The request that was used to make current response.
 * @return \WP_REST_Response Response to be served, trimmed down to contain a subset of fields.
 */
    public function restFilterResponseFields(\WP_REST_Response $response, \WP_REST_Server $server, \WP_REST_Request $request): \WP_REST_Response;
}
