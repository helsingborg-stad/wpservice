<?php

namespace WpService\Contracts;

interface WpUpdateNavMenuItem
{
    /**
 * Saves the properties of a menu item or create a new one.
 *
 * The menu-item-title, menu-item-description and menu-item-attr-title are expected
 * to be pre-slashed since they are passed directly to APIs that expect slashed data.
 *
 * @since 3.0.0
 * @since 5.9.0 Added the `$fire_after_hooks` parameter.
 *
 * @param int $menuId          The ID of the menu. If 0, makes the menu item a draft orphan.
 * @param int $menuItemDbId  The ID of the menu item. If 0, creates a new menu item.
 * @param array $menuItemData   The menu item's data.
 * @param bool $fireAfterHooks Whether to fire the after insert hooks. Default true.
 * @return int|\WP_Error The menu item's database ID or WP_Error object on failure.
 */
    public function wpUpdateNavMenuItem(int $menuId, int $menuItemDbId, array $menuItemData, bool $fireAfterHooks): int|\WP_Error;
}
