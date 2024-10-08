<?php

namespace WpService\Contracts;

interface CountUserPosts
{
    /**
 * Gets the number of posts a user has written.
 *
 * @since 3.0.0
 * @since 4.1.0 Added `$post_type` argument.
 * @since 4.3.0 Added `$public_only` argument. Added the ability to pass an array
 *              of post types to `$post_type`.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $userid      User ID.
 * @param array|string $postType   Optional. Single post type or array of post types to count the number of posts for. Default 'post'.
 * @param bool $publicOnly Optional. Whether to only return counts for public posts. Default false.
 * @return string Number of posts the user has written in this post type.
 */
    public function countUserPosts(int $userid, array|string $postType, bool $publicOnly): string;
}
