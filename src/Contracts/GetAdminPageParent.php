<?php

namespace WpService\Contracts;

interface GetAdminPageParent
{
    /**
 * Gets the parent file of the current admin page.
 *
 * @since 1.5.0
 *
 * @global string $parent_file
 * @global array  $menu
 * @global array  $submenu
 * @global string $pagenow              The filename of the current screen.
 * @global string $typenow              The post type of the current screen.
 * @global string $plugin_page
 * @global array  $_wp_real_parent_file
 * @global array  $_wp_menu_nopriv
 * @global array  $_wp_submenu_nopriv
 *
 * @param string $parentPage Optional. The slug name for the parent menu (or the file name
 *                            of a standard WordPress admin page). Default empty string.
 * @return string The parent file of the current admin page.
 */
    public function getAdminPageParent(string $parentPage): string;
}
