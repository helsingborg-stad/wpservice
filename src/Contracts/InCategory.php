<?php

namespace WpService\Contracts;

interface InCategory
{
    /**
 * Checks if the current post is within any of the given categories.
 *
 * The given categories are checked against the post's categories' term_ids, names and slugs.
 * Categories given as integers will only be checked against the post's categories' term_ids.
 *
 * Prior to v2.5 of WordPress, category names were not supported.
 * Prior to v2.7, category slugs were not supported.
 * Prior to v2.7, only one category could be compared: in_category( $single_category ).
 * Prior to v2.7, this function could only be used in the WordPress Loop.
 * As of 2.7, the function can be used anywhere if it is provided a post ID or post object.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 1.2.0
 * @since 2.7.0 The `$post` parameter was added.
 *
 * @param int|string|int[]|string[] $category Category ID, name, slug, or array of such
 *                                            to check against.
 * @param int|\WP_Post $post     Optional. Post to check. Defaults to the current post.
 * @return bool True if the current post is in any of the given categories.
 */
    public function inCategory(int|string|array $category, int|\WP_Post $post = null): bool;
}
