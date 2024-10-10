<?php

namespace WpService\Contracts;

interface IsNavMenuItem
{
    /**
     * Determines whether the given ID is a nav menu item.
     *
     * @since 3.0.0
     *
     * @param int $menuItemId The ID of the potential nav menu item.
     * @return bool Whether the given ID is that of a nav menu item.
     */
    public function isNavMenuItem(int $menuItemId): bool;
}
