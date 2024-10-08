<?php

namespace WpService\Contracts;

interface RemoveQueryArg
{
    /**
 * Removes an item or items from a query string.
 *
 * Important: The return value of remove_query_arg() is not escaped by default. Output should be
 * late-escaped with esc_url() or similar to help prevent vulnerability to cross-site scripting
 * (XSS) attacks.
 *
 * @since 1.5.0
 *
 * @param string|string[] $key   Query key or keys to remove.
 * @param false|string $query Optional. When false uses the current URL. Default false.
 * @return string New URL query string.
 */
    public function removeQueryArg(string|array $key, false|string $query): string;
}
