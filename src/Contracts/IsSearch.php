<?php

namespace WpService\Contracts;

interface IsSearch
{
    /**
 * Determines whether the query is for a search.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 1.5.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return bool Whether the query is for a search.
 */
    public function isSearch(): bool;
}
