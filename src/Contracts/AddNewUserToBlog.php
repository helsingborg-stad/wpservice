<?php

namespace WpService\Contracts;

interface AddNewUserToBlog
{
/**
 * Adds a newly created user to the appropriate blog
 *
 * To add a user in general, use add_user_to_blog(). This function
 * is specifically hooked into the {@see 'wpmu_activate_user'} action.
 *
 * @since MU (3.0.0)
 *
 * @see add_user_to_blog()
 *
 * @param int $userId  User ID.
 * @param string $password User password. Ignored.
 * @param array $meta     Signup meta data.
 */
    public function addNewUserToBlog(int $userId, string $password, array $meta): void;
}
