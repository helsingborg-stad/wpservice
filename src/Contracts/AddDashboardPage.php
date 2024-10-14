<?php

namespace WpService\Contracts;

interface AddDashboardPage
{
/**
 * Adds a submenu page to the Dashboard main menu.
 *
 * This function takes a capability which will be used to determine whether
 * or not a page is included in the menu.
 *
 * The function which is hooked in to handle the output of the page must check
 * that the user has the required capability as well.
 *
 * @since 2.7.0
 * @since 5.3.0 Added the `$position` parameter.
 *
 * @param string $pageTitle The text to be displayed in the title tags of the page when the menu is selected.
 * @param string $menuTitle The text to be used for the menu.
 * @param string $capability The capability required for this menu to be displayed to the user.
 * @param string $menuSlug  The slug name to refer to this menu by (should be unique for this menu).
 * @param callable $callback   Optional. The function to be called to output the content for this page.
 * @param int $position   Optional. The position in the menu order this item should appear.
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required.
 */
    public function addDashboardPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false;
}
