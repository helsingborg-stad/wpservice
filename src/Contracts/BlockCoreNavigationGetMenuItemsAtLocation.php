<?php

namespace WpService\Contracts;

interface BlockCoreNavigationGetMenuItemsAtLocation
{
    /**
     * Returns the menu items for a WordPress menu location.
     *
     * @since 5.9.0
     *
     * @param string $location The menu location.
     * @return array Menu items for the location.
     */
    public function blockCoreNavigationGetMenuItemsAtLocation(string $location): array;
}
