<?php

namespace WpService\Contracts;

interface IsUserAdmin
{
/**
 * Determines whether the current request is for a user admin screen.
 *
 * e.g. `/wp-admin/user/`
 *
 * Does not check if the user is an administrator; use current_user_can()
 * for checking roles and capabilities.
 *
 * @since 3.1.0
 *
 * @global WP_Screen $current_screen WordPress current screen object.
 *
 * @return bool True if inside WordPress user administration pages.
 */
    public function isUserAdmin(): bool;
}
