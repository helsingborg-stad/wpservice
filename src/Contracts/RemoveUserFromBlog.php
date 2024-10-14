<?php

namespace WpService\Contracts;

interface RemoveUserFromBlog
{
/**
 * Removes a user from a blog.
 *
 * Use the {@see 'remove_user_from_blog'} action to fire an event when
 * users are removed from a blog.
 *
 * Accepts an optional `$reassign` parameter, if you want to
 * reassign the user's blog posts to another user upon removal.
 *
 * @since MU (3.0.0)
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $userId  ID of the user being removed.
 * @param int $blogId  Optional. ID of the blog the user is being removed from. Default 0.
 * @param int $reassign Optional. ID of the user to whom to reassign posts. Default 0.
 * @return true|\WP_Error True on success or a WP_Error object if the user doesn't exist.
 */
    public function removeUserFromBlog(int $userId, int $blogId = 0, int $reassign = 0): true|\WP_Error;
}
