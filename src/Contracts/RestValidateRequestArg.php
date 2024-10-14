<?php

namespace WpService\Contracts;

interface RestValidateRequestArg
{
/**
 * Validate a request argument based on details registered to the route.
 *
 * @since 4.7.0
 *
 * @param mixed $value
 * @param \WP_REST_Request $request
 * @param string $param
 * @return true|\WP_Error
 */
    public function restValidateRequestArg(mixed $value, \WP_REST_Request $request, string $param): true|\WP_Error;
}
