<?php

namespace WpService\Contracts;

interface AddSubmenuPage
{
/**
 * Adds a submenu page.
 *
 * This function takes a capability which will be used to determine whether
 * or not a page is included in the menu.
 *
 * The function which is hooked in to handle the output of the page must check
 * that the user has the required capability as well.
 *
 * @since 1.5.0
 * @since 5.3.0 Added the `$position` parameter.
 *
 * @global array $submenu
 * @global array $menu
 * @global array $_wp_real_parent_file
 * @global bool  $_wp_submenu_nopriv
 * @global array $_registered_pages
 * @global array $_parent_pages
 *
 * @param string $parentSlug The slug name for the parent menu (or the file name of a standard
 *                               WordPress admin page).
 * @param string $pageTitle  The text to be displayed in the title tags of the page when the menu
 *                               is selected.
 * @param string $menuTitle  The text to be used for the menu.
 * @param string $capability  The capability required for this menu to be displayed to the user.
 * @param string $menuSlug   The slug name to refer to this menu by. Should be unique for this menu
 *                               and only include lowercase alphanumeric, dashes, and underscores characters
 *                               to be compatible with sanitize_key().
 * @param callable $callback    Optional. The function to be called to output the content for this page.
 * @param int|float $position    Optional. The position in the menu order this item should appear.
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required.
 */
    public function addSubmenuPage(string $parentSlug, string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int|float $position = null): string|false;
}
