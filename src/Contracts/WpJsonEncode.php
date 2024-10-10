<?php

namespace WpService\Contracts;

interface WpJsonEncode
{
    /**
 * Encodes a variable into JSON, with some confidence checks.
 *
 * @since 4.1.0
 * @since 5.3.0 No longer handles support for PHP < 5.6.
 * @since 6.5.0 The `$data` parameter has been renamed to `$value` and
 *              the `$options` parameter to `$flags` for parity with PHP.
 *
 * @param mixed $value Variable (usually an array or object) to encode as JSON.
 * @param int $flags Optional. Options to be passed to json_encode(). Default 0.
 * @param int $depth Optional. Maximum depth to walk through $value. Must be
 *                     greater than 0. Default 512.
 * @return string|false The JSON encoded string, or false if it cannot be encoded.
 */
public function wpJsonEncode(mixed $value, int $flags, int $depth = 512): string|false;
}
