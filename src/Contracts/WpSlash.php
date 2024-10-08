<?php

namespace WpService\Contracts;

interface WpSlash
{
    /**
 * Adds slashes to a string or recursively adds slashes to strings within an array.
 *
 * This should be used when preparing data for core API that expects slashed data.
 * This should not be used to escape data going directly into an SQL query.
 *
 * @since 3.6.0
 * @since 5.5.0 Non-string values are left untouched.
 *
 * @param string|array $value String or array of data to slash.
 * @return string|array Slashed `$value`, in the same type as supplied.
 */
    public function wpSlash(string|array $value): string|array;
}
