<?php

namespace WpService\Contracts;

interface RegisterNavMenus
{
    /**
     * Registers navigation menu locations for a theme.
     *
     * @since 3.0.0
     *
     * @global array $_wp_registered_nav_menus
     *
     * @param string[] $locations Associative array of menu location identifiers (like a slug) and descriptive text.
     */
    public function registerNavMenus(array $locations = []): void;
}
