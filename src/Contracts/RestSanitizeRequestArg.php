<?php

namespace WpService\Contracts;

interface RestSanitizeRequestArg
{
/**
 * Sanitize a request argument based on details registered to the route.
 *
 * @since 4.7.0
 *
 * @param mixed $value
 * @param \WP_REST_Request $request
 * @param string $param
 * @return mixed
 */
    public function restSanitizeRequestArg(mixed $value, \WP_REST_Request $request, string $param): mixed;
}
