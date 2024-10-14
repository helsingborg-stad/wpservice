<?php

namespace WpService\Contracts;

interface UpdateMenuItemCache
{
/**
 * Updates post and term caches for all linked objects for a list of menu items.
 *
 * @since 6.1.0
 *
 * @param WP_Post[] $menuItems Array of menu item post objects.
 */
    public function updateMenuItemCache(array $menuItems): void;
}
