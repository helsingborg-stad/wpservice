<?php

namespace WpService\Contracts;

interface IsNetworkAdmin
{
    /**
 * Determines whether the current request is for the network administrative interface.
 *
 * e.g. `/wp-admin/network/`
 *
 * Does not check if the user is an administrator; use current_user_can()
 * for checking roles and capabilities.
 *
 * Does not check if the site is a Multisite network; use is_multisite()
 * for checking if Multisite is enabled.
 *
 * @since 3.1.0
 *
 * @global WP_Screen $current_screen WordPress current screen object.
 *
 * @return bool True if inside WordPress network administration pages.
 */
    public function isNetworkAdmin(): bool;
}
