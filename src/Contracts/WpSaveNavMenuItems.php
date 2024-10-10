<?php

namespace WpService\Contracts;

interface WpSaveNavMenuItems
{
    /**
     * Save posted nav menu item data.
     *
     * @since 3.0.0
     *
     * @param int $menuId   The menu ID for which to save this item. Value of 0 makes a draft, orphaned menu item. Default 0.
     * @param array[] $menuData The unsanitized POSTed menu item data.
     * @return int[] The database IDs of the items saved
     */
    public function wpSaveNavMenuItems(int $menuId, array $menuData = []): array;
}
