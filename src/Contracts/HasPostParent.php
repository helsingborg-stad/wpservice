<?php

namespace WpService\Contracts;

interface HasPostParent
{
    /**
 * Returns whether the given post has a parent post.
 *
 * @since 5.7.0
 *
 * @param int|\WP_Post|null $post Optional. Post ID or WP_Post object. Default is global $post.
 * @return bool Whether the post has a parent post.
 */
    public function hasPostParent(int|\WP_Post|null $post): bool;
}
