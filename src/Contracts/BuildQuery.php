<?php

namespace WpService\Contracts;

interface BuildQuery
{
    /**
 * Builds URL query based on an associative and, or indexed array.
 *
 * This is a convenient function for easily building url queries. It sets the
 * separator to '&' and uses _http_build_query() function.
 *
 * @since 2.3.0
 *
 * @see _http_build_query() Used to build the query
 * @link https://www.php.net/manual/en/function.http-build-query.php for more on what
 *       http_build_query() does.
 *
 * @param array $data URL-encode key/value pairs.
 * @return string URL-encoded string.
 */
    public function buildQuery(array $data): string;
}
