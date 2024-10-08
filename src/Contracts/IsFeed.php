<?php

namespace WpService\Contracts;

interface IsFeed
{
    /**
 * Determines whether the query is for a feed.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 1.5.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param string|string[] $feeds Optional. Feed type or array of feed types
 *                                         to check against. Default empty.
 * @return bool Whether the query is for a feed.
 */
    public function isFeed(string|array $feeds): bool;
}
