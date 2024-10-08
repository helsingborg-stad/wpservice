<?php

namespace WpService\Contracts;

interface RestDoRequest
{
    /**
 * Do a REST request.
 *
 * Used primarily to route internal requests through WP_REST_Server.
 *
 * @since 4.4.0
 *
 * @param \WP_REST_Request|string $request Request.
 * @return \WP_REST_Response REST response.
 */
    public function restDoRequest(\WP_REST_Request|string $request): \WP_REST_Response;
}
