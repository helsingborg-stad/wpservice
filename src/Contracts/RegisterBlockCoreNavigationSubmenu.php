<?php

namespace WpService\Contracts;

interface RegisterBlockCoreNavigationSubmenu
{
    /**
     * Register the navigation submenu block.
     *
     * @since 5.9.0
     *
     * @uses render_block_core_navigation_submenu()
     * @throws WP_Error An WP_Error exception parsing the block definition.
     */
    public function registerBlockCoreNavigationSubmenu(): void;
}
