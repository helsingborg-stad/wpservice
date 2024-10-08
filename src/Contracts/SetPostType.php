<?php

namespace WpService\Contracts;

interface SetPostType
{
    /**
 * Updates the post type for the post ID.
 *
 * The page or post cache will be cleaned for the post ID.
 *
 * @since 2.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $postId   Optional. Post ID to change post type. Default 0.
 * @param string $postType Optional. Post type. Accepts 'post' or 'page' to
 *                          name a few. Default 'post'.
 * @return int|false Amount of rows changed. Should be 1 for success and 0 for failure.
 */
    public function setPostType(int $postId, string $postType): int|false;
}
