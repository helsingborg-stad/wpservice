<?php

namespace WpService\Contracts;

interface DynamicSidebar
{
/**
 * Display dynamic sidebar.
 *
 * By default this displays the default sidebar or 'sidebar-1'. If your theme specifies the 'id' or
 * 'name' parameter for its registered sidebars you can pass an ID or name as the $index parameter.
 * Otherwise, you can pass in a numerical index to display the sidebar at that index.
 *
 * @since 2.2.0
 *
 * @global array $wp_registered_sidebars The registered sidebars.
 * @global array $wp_registered_widgets  The registered widgets.
 *
 * @param int|string $index Optional. Index, name or ID of dynamic sidebar. Default 1.
 * @return bool True, if widget sidebar was found and called. False if not found or not called.
 */
    public function dynamicSidebar(int|string $index = 1): bool;
}
