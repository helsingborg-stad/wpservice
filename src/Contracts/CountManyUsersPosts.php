<?php

namespace WpService\Contracts;

interface CountManyUsersPosts
{
/**
 * Gets the number of posts written by a list of users.
 *
 * @since 3.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int[] $users       Array of user IDs.
 * @param string|string[] $postType   Optional. Single post type or array of post types to check. Defaults to 'post'.
 * @param bool $publicOnly Optional. Only return counts for public posts.  Defaults to false.
 * @return string[] Amount of posts each user has written, as strings, keyed by user ID.
 */
    public function countManyUsersPosts(array $users, string|array $postType = 'post', bool $publicOnly = false): array;
}
