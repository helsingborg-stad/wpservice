<?php

namespace WpService\Contracts;

interface RestConvertErrorToResponse
{
    /**
     * Converts an error to a response object.
     *
     * This iterates over all error codes and messages to change it into a flat
     * array. This enables simpler client behavior, as it is represented as a
     * list in JSON rather than an object/map.
     *
     * @since 5.7.0
     *
     * @param \WP_Error $error WP_Error instance.
     *
     * @return \WP_REST_Response List of associative arrays with code and message keys.
     */
    public function restConvertErrorToResponse(\WP_Error $error): \WP_REST_Response;
}
