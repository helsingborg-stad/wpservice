<?php

namespace WpService\Contracts;

interface WpGetCurrentUser
{
/**
 * Retrieves the current user object.
 *
 * Will set the current user, if the current user is not set. The current user
 * will be set to the logged-in person. If no user is logged-in, then it will
 * set the current user to 0, which is invalid and won't have any permissions.
 *
 * @since 2.0.3
 *
 * @see _wp_get_current_user()
 * @global WP_User $current_user Checks if the current user is set.
 *
 * @return \WP_User Current WP_User instance.
 */
    public function wpGetCurrentUser(): \WP_User;
}
