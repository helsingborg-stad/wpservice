<?php

namespace WpService\Contracts;

interface WpShouldLoadBlockAssetsOnDemand
{
/**
 * Checks whether block styles should be loaded only on-render.
 *
 * When this function returns true, other functions ensure that blocks only load their assets on-render.
 * When this function returns false, all block assets are loaded regardless of whether they are rendered in a page.
 *
 * The default return value depends on the result of {@see wp_should_load_separate_core_block_assets()}, which controls
 * whether Core block stylesheets should be loaded separately or via a combined 'wp-block-library' stylesheet.
 *
 * This only affects front end and not the block editor screens.
 *
 * @since 6.8.0
 * @see wp_should_load_separate_core_block_assets()
 *
 * @return bool Whether to load block assets only when they are rendered.
 */
    public function wpShouldLoadBlockAssetsOnDemand(): bool;
}
