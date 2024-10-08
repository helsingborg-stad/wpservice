<?php

namespace WpService\Contracts;

interface IsRegisteredSidebar
{
    /**
     * Checks if a sidebar is registered.
     *
     * @since 4.4.0
     *
     * @global array $wp_registered_sidebars The registered sidebars.
     *
     * @param string|int $sidebarId The ID of the sidebar when it was registered.
     * @return bool True if the sidebar is registered, false otherwise.
     */
    public function isRegisteredSidebar(string|int $sidebarId): bool;
}
