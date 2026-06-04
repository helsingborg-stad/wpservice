<?php

namespace WpService\Contracts;

interface WpShouldLoadSeparateCoreBlockAssets
{
/**
 * Checks whether separate styles should be loaded for core blocks.
 *
 * When this function returns true, other functions ensure that core blocks use their own separate stylesheets.
 * When this function returns false, all core blocks will use the single combined 'wp-block-library' stylesheet.
 *
 * As a side effect, the return value will by default result in block assets to be loaded on demand, via the
 * {@see wp_should_load_block_assets_on_demand()} function. This behavior can be separately altered via that function.
 *
 * This only affects front end and not the block editor screens.
 *
 * @since 5.8.0
 * @see @see wp_should_load_block_assets_on_demand()
 * @see wp_enqueue_registered_block_scripts_and_styles()
 * @see register_block_style_handle()
 *
 * @return bool Whether separate core block assets will be loaded.
 */
    public function wpShouldLoadSeparateCoreBlockAssets(): bool;
}
