<?php

namespace WpService\Contracts;

interface UnregisterNavMenu
{
    /**
     * Unregisters a navigation menu location for a theme.
     *
     * @since 3.1.0
     *
     * @global array $_wp_registered_nav_menus
     *
     * @param string $location The menu location identifier.
     * @return bool True on success, false on failure.
     */
    public function unregisterNavMenu(string $location): bool;
}
