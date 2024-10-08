<?php

namespace WpService\Contracts;

interface Is404
{
    /**
 * Determines whether the query has resulted in a 404 (returns no results).
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 1.5.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return bool Whether the query is a 404 error.
 */
    public function is404(): bool;
}
