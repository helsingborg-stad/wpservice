<?php

namespace WpService\Contracts;

interface WpSprintf
{
/**
 * WordPress' implementation of PHP sprintf() with filters.
 *
 * @since 2.5.0
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by adding it to the function signature.
 *
 * @link https://www.php.net/sprintf
 *
 * @param string $pattern The string which formatted args are inserted.
 * @param mixed  ...$args Arguments to be formatted into the $pattern string.
 * @return string The formatted string.
 */
    public function wpSprintf(string $pattern, mixed ...$args): string;
}
