<?php

namespace WpService\Contracts;

interface WpCheckJsonpCallback
{
    /**
 * Checks that a JSONP callback is a valid JavaScript callback name.
 *
 * Only allows alphanumeric characters and the dot character in callback
 * function names. This helps to mitigate XSS attacks caused by directly
 * outputting user input.
 *
 * @since 4.6.0
 *
 * @param string $callback Supplied JSONP callback function name.
 * @return bool Whether the callback function name is valid.
 */
    public function wpCheckJsonpCallback(string $callback): bool;
}