<?php

namespace WpService\Contracts;

interface WpIsServingRestRequest
{
/**
 * Determines whether WordPress is currently serving a REST API request.
 *
 * The function relies on the 'REST_REQUEST' global. As such, it only returns true when an actual REST _request_ is
 * being made. It does not return true when a REST endpoint is hit as part of another request, e.g. for preloading a
 * REST response. See {@see wp_is_rest_endpoint()} for that purpose.
 *
 * This function should not be called until the {@see 'parse_request'} action, as the constant is only defined then,
 * even for an actual REST request.
 *
 * @since 6.5.0
 *
 * @return bool True if it's a WordPress REST API request, false otherwise.
 */
    public function wpIsServingRestRequest(): bool;
}
