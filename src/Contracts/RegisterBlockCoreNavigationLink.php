<?php

namespace WpService\Contracts;

interface RegisterBlockCoreNavigationLink
{
/**
 * Registers the navigation link block.
 *
 * @since 5.9.0
 *
 * @uses render_block_core_navigation_link()
 * @throws WP_Error An WP_Error exception parsing the block definition.
 */
    public function registerBlockCoreNavigationLink(): void;
}
