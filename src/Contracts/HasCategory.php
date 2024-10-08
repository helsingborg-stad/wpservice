<?php

namespace WpService\Contracts;

interface HasCategory
{
    /**
 * Checks if the current post has any of given category.
 *
 * The given categories are checked against the post's categories' term_ids, names and slugs.
 * Categories given as integers will only be checked against the post's categories' term_ids.
 *
 * If no categories are given, determines if post has any categories.
 *
 * @since 3.1.0
 *
 * @param string|int|array $category Optional. The category name/term_id/slug,
 *                                   or an array of them to check for. Default empty.
 * @param int|\WP_Post $post     Optional. Post to check. Defaults to the current post.
 * @return bool True if the current post has any of the given categories
 *              (or any category, if no category specified). False otherwise.
 */
    public function hasCategory(string|int|array $category = '', int|\WP_Post $post = null): bool;
}
