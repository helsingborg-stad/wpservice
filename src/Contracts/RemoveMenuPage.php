<?php

namespace WpService\Contracts;

interface RemoveMenuPage
{
/**
 * Removes a top-level admin menu.
 *
 * Example usage:
 *
 *  - `remove_menu_page( 'tools.php' )`
 *  - `remove_menu_page( 'plugin_menu_slug' )`
 *
 * @since 3.1.0
 *
 * @global array $menu
 *
 * @param string $menuSlug The slug of the menu.
 * @return array|false The removed menu on success, false if not found.
 */
    public function removeMenuPage(string $menuSlug): array|false;
}
