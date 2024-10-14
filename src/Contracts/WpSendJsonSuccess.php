<?php

namespace WpService\Contracts;

interface WpSendJsonSuccess
{
/**
 * Sends a JSON response back to an Ajax request, indicating success.
 *
 * @since 3.5.0
 * @since 4.7.0 The `$status_code` parameter was added.
 * @since 5.6.0 The `$flags` parameter was added.
 *
 * @param mixed $value       Optional. Data to encode as JSON, then print and die. Default null.
 * @param int $statusCode Optional. The HTTP status code to output. Default null.
 * @param int $flags       Optional. Options to be passed to json_encode(). Default 0.
 */
public function wpSendJsonSuccess(mixed $value = null, int $statusCode = null, int $flags = 0): void;
}