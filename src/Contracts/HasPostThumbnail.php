<?php

namespace WpService\Contracts;

interface HasPostThumbnail
{
    /**
 * Determines whether a post has an image attached.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 2.9.0
 * @since 4.4.0 `$post` can be a post ID or WP_Post object.
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
 * @return bool Whether the post has an image attached.
 */
    public function hasPostThumbnail(int|\WP_Post $post): bool;
}
