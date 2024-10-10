<?php

namespace WpService\Contracts;

interface WpSendJson
{
    /**
 * Sends a JSON response back to an Ajax request.
 *
 * @since 3.5.0
 * @since 4.7.0 The `$status_code` parameter was added.
 * @since 5.6.0 The `$flags` parameter was added.
 *
 * @param mixed $response    Variable (usually an array or object) to encode as JSON,
 *                           then print and die.
 * @param int $statusCode Optional. The HTTP status code to output. Default null.
 * @param int $flags       Optional. Options to be passed to json_encode(). Default 0.
 */
public function wpSendJson(mixed $response, int $statusCode = null, int $flags): void;
}
