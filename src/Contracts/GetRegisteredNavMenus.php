<?php

namespace WpService\Contracts;

interface GetRegisteredNavMenus
{
/**
 * Retrieves all registered navigation menu locations in a theme.
 *
 * @since 3.0.0
 *
 * @global array $_wp_registered_nav_menus
 *
 * @return string[] Associative array of registered navigation menu descriptions keyed
 *                  by their location. If none are registered, an empty array.
 */
    public function getRegisteredNavMenus(): array;
}
