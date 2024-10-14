<?php

namespace WpService\Contracts;

interface IsYear
{
/**
 * Determines whether the query is for an existing year archive.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 1.5.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return bool Whether the query is for an existing year archive.
 */
    public function isYear(): bool;
}
