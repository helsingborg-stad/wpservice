<?php

namespace WpService\Contracts;

interface WpCountTerms
{
/**
 * Counts how many terms are in taxonomy.
 *
 * Default $args is 'hide_empty' which can be 'hide_empty=true' or array('hide_empty' => true).
 *
 * @since 2.3.0
 * @since 5.6.0 Changed the function signature so that the `$args` array can be provided as the first parameter.
 *
 * @internal The `$deprecated` parameter is parsed for backward compatibility only.
 *
 * @param array|string $args       Optional. Array or string of arguments. See WP_Term_Query::__construct()
 *                                 for information on accepted arguments. Default empty array.
 * @param array|string $deprecated Optional. Argument array, when using the legacy function parameter format.
 *                                 If present, this parameter will be interpreted as `$args`, and the first
 *                                 function parameter will be parsed as a taxonomy or array of taxonomies.
 *                                 Default empty.
 * @return string|\WP_Error Numeric string containing the number of terms in that
 *                         taxonomy or WP_Error if the taxonomy does not exist.
 */
    public function wpCountTerms(array|string $args = [], array|string $deprecated = ''): string|\WP_Error;
}
