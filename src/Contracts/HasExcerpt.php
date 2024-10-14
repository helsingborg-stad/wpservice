<?php

namespace WpService\Contracts;

interface HasExcerpt
{
/**
 * Determines whether the post has a custom excerpt.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 2.3.0
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @return bool True if the post has a custom excerpt, false otherwise.
 */
    public function hasExcerpt(int|\WP_Post $post = 0): bool;
}
