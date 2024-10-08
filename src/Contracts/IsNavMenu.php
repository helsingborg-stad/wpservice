<?php

namespace WpService\Contracts;

interface IsNavMenu
{
    /**
 * Determines whether the given ID is a navigation menu.
 *
 * Returns true if it is; false otherwise.
 *
 * @since 3.0.0
 *
 * @param int|string|\WP_Term $menu Menu ID, slug, name, or object of menu to check.
 * @return bool Whether the menu exists.
 */
    public function isNavMenu(int|string|\WP_Term $menu): bool;
}
