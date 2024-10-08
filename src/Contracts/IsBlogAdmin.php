<?php

namespace WpService\Contracts;

interface IsBlogAdmin
{
    /**
     * Determines whether the current request is for a site's administrative interface.
     *
     * e.g. `/wp-admin/`
     *
     * Does not check if the user is an administrator; use current_user_can()
     * for checking roles and capabilities.
     *
     * @since 3.1.0
     *
     * @global WP_Screen $current_screen WordPress current screen object.
     *
     * @return bool True if inside WordPress site administration pages.
     */
    public function isBlogAdmin(): bool;
}
