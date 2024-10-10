<?php

namespace WpService\Contracts;

interface WpUpdateNavMenuObject
{
    /**
     * Saves the properties of a menu or create a new menu with those properties.
     *
     * Note that `$menu_data` is expected to be pre-slashed.
     *
     * @since 3.0.0
     *
     * @param int $menuId   The ID of the menu or "0" to create a new menu.
     * @param array $menuData The array of menu data.
     * @return int|\WP_Error Menu ID on success, WP_Error object on failure.
     */
    public function wpUpdateNavMenuObject(int $menuId = 0, array $menuData = []): int|\WP_Error;
}
