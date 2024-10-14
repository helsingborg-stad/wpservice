<?php

namespace WpService\Contracts;

interface SetupUserdata
{
/**
 * Sets up global user vars.
 *
 * Used by wp_set_current_user() for back compat. Might be deprecated in the future.
 *
 * @since 2.0.4
 *
 * @global string  $user_login    The user username for logging in
 * @global WP_User $userdata      User data.
 * @global int     $user_level    The level of the user
 * @global int     $user_ID       The ID of the user
 * @global string  $user_email    The email address of the user
 * @global string  $user_url      The url in the user's profile
 * @global string  $user_identity The display name of the user
 *
 * @param int $forUserId Optional. User ID to set up global data. Default 0.
 */
    public function setupUserdata(int $forUserId = 0): void;
}
