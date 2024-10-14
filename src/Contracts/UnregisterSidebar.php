<?php

namespace WpService\Contracts;

interface UnregisterSidebar
{
/**
 * Removes a sidebar from the list.
 *
 * @since 2.2.0
 *
 * @global array $wp_registered_sidebars The registered sidebars.
 *
 * @param string|int $sidebarId The ID of the sidebar when it was registered.
 */
    public function unregisterSidebar(string|int $sidebarId): void;
}
