<?php

namespace WpService\Contracts;

interface RestParseRequestArg
{
/**
 * Parse a request argument based on details registered to the route.
 *
 * Runs a validation check and sanitizes the value, primarily to be used via
 * the `sanitize_callback` arguments in the endpoint args registration.
 *
 * @since 4.7.0
 *
 * @param mixed $value
 * @param \WP_REST_Request $request
 * @param string $param
 * @return mixed
 */
    public function restParseRequestArg(mixed $value, \WP_REST_Request $request, string $param): mixed;
}
