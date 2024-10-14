<?php

namespace WpService\Contracts;

interface IsPostTypeArchive
{
/**
 * Determines whether the query is for an existing post type archive page.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 3.1.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param string|string[] $postTypes Optional. Post type or array of posts types
 *                                    to check against. Default empty.
 * @return bool Whether the query is for an existing post type archive page.
 */
    public function isPostTypeArchive(string|array $postTypes = ''): bool;
}
