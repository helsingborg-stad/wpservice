<?php

namespace WpService\Contracts;

interface RemoveSubmenuPage
{
    /**
 * Removes an admin submenu.
 *
 * Example usage:
 *
 *  - `remove_submenu_page( 'themes.php', 'nav-menus.php' )`
 *  - `remove_submenu_page( 'tools.php', 'plugin_submenu_slug' )`
 *  - `remove_submenu_page( 'plugin_menu_slug', 'plugin_submenu_slug' )`
 *
 * @since 3.1.0
 *
 * @global array $submenu
 *
 * @param string $menuSlug    The slug for the parent menu.
 * @param string $submenuSlug The slug of the submenu.
 * @return array|false The removed submenu on success, false if not found.
 */
    public function removeSubmenuPage(string $menuSlug, string $submenuSlug): array|false;
}
