<?php

namespace WpService\Contracts;

interface AddQueryArg
{
    /**
     * Retrieves a modified URL query string.
     *
     * You can rebuild the URL and append query variables to the URL query by using this function.
     * There are two ways to use this function; either a single key and value, or an associative array.
     *
     * Using a single key and value:
     *
     *     add_query_arg( 'key', 'value', 'http://example.com' );
     *
     * Using an associative array:
     *
     *     add_query_arg( array(
     *         'key1' => 'value1',
     *         'key2' => 'value2',
     *     ), 'http://example.com' );
     *
     * Omitting the URL from either use results in the current URL being used
     * (the value of `$_SERVER['REQUEST_URI']`).
     *
     * Values are expected to be encoded appropriately with urlencode() or rawurlencode().
     *
     * Setting any query variable's value to boolean false removes the key (see remove_query_arg()).
     *
     * Important: The return value of add_query_arg() is not escaped by default. Output should be
     * late-escaped with esc_url() or similar to help prevent vulnerability to cross-site scripting
     * (XSS) attacks.
     *
     * @since 1.5.0
     * @since 5.3.0 Formalized the existing and already documented parameters
     *              by adding `...$args` to the function signature.
     *
     * @param string|array $key   Either a query variable key, or an associative array of query variables.
     * @param string $value Optional. Either a query variable value, or a URL to act upon.
     * @param string $url   Optional. A URL to act upon.
     * @return string New URL query string (unescaped).
     */
    public function addQueryArg(string|array $key, string $value, string $url): string;
}
