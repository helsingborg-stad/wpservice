<?php

namespace WpService\Contracts;

interface CountManyUsersPosts
{
/**
 * Gets the number of posts written by a list of users.
 *
 * @since 3.0.0
 * @since 6.9.0 The results are now cached.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int[] $users       Array of user IDs.
 * @param string|string[] $postType   Optional. Single post type or array of post types to check. Defaults to 'post'.
 * @param bool $publicOnly Optional. Only return counts for public posts.  Defaults to false.
 * @return array<int, string> Amount of posts each user has written, as strings, keyed by user ID.
 */
    public function countManyUsersPosts(array $users, string|array $postType = 'post', bool $publicOnly = false): array;
}
