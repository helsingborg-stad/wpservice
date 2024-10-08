<?php

namespace WpService\Contracts;

interface BlockCoreNavigationSortMenuItemsByParentId
{
    /**
     * Sorts a standard array of menu items into a nested structure keyed by the
     * id of the parent menu.
     *
     * @since 5.9.0
     *
     * @param array $menuItems Menu items to sort.
     * @return array An array keyed by the id of the parent menu where each element
     *               is an array of menu items that belong to that parent.
     */
    public function blockCoreNavigationSortMenuItemsByParentId(array $menuItems): array;
}
