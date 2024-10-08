<?php

namespace WpService\Contracts;

interface RestEnsureRequest
{
    /**
     * Ensures request arguments are a request object (for consistency).
     *
     * @since 4.4.0
     * @since 5.3.0 Accept string argument for the request path.
     *
     * @param array|string|\WP_REST_Request $request Request to check.
     * @return \WP_REST_Request REST request instance.
     */
    public function restEnsureRequest(array|string|\WP_REST_Request $request): \WP_REST_Request;
}
