<?php

namespace WpService\Contracts;

interface UserCanAccessAdminPage
{
/**
 * Determines whether the current user can access the current admin page.
 *
 * @since 1.5.0
 *
 * @global string $pagenow            The filename of the current screen.
 * @global array  $menu
 * @global array  $submenu
 * @global array  $_wp_menu_nopriv
 * @global array  $_wp_submenu_nopriv
 * @global string $plugin_page
 * @global array  $_registered_pages
 *
 * @return bool True if the current user can access the admin page, false otherwise.
 */
    public function userCanAccessAdminPage(): bool;
}
