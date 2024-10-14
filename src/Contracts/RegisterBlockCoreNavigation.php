<?php

namespace WpService\Contracts;

interface RegisterBlockCoreNavigation
{
/**
 * Register the navigation block.
 *
 * @since 5.9.0
 *
 * @uses render_block_core_navigation()
 * @throws WP_Error An WP_Error exception parsing the block definition.
 */
    public function registerBlockCoreNavigation(): void;
}
