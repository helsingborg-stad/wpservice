<?php

namespace WpService\Contracts;

interface WpSendJsonError
{
    /**
 * Sends a JSON response back to an Ajax request, indicating failure.
 *
 * If the `$value` parameter is a WP_Error object, the errors
 * within the object are processed and output as an array of error
 * codes and corresponding messages. All other types are output
 * without further processing.
 *
 * @since 3.5.0
 * @since 4.1.0 The `$value` parameter is now processed if a WP_Error object is passed in.
 * @since 4.7.0 The `$status_code` parameter was added.
 * @since 5.6.0 The `$flags` parameter was added.
 *
 * @param mixed $value       Optional. Data to encode as JSON, then print and die. Default null.
 * @param int $statusCode Optional. The HTTP status code to output. Default null.
 * @param int $flags       Optional. Options to be passed to json_encode(). Default 0.
 */
public function wpSendJsonError(mixed $value = null, int $statusCode = null, int $flags = 0): void;
}
