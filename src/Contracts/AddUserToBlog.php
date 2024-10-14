<?php

namespace WpService\Contracts;

interface AddUserToBlog
{
/**
 * Adds a user to a blog, along with specifying the user's role.
 *
 * Use the {@see 'add_user_to_blog'} action to fire an event when users are added to a blog.
 *
 * @since MU (3.0.0)
 *
 * @param int $blogId ID of the blog the user is being added to.
 * @param int $userId ID of the user being added.
 * @param string $role    User role.
 * @return true|\WP_Error True on success or a WP_Error object if the user doesn't exist
 *                       or could not be added.
 */
    public function addUserToBlog(int $blogId, int $userId, string $role): true|\WP_Error;
}
