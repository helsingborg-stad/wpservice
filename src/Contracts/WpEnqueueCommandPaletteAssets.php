<?php

namespace WpService\Contracts;

interface WpEnqueueCommandPaletteAssets
{
/**
 * Enqueues the assets required for the Command Palette.
 *
 * @since 6.9.0
 *
 * @global array  $menu
 * @global array  $submenu
 */
    public function wpEnqueueCommandPaletteAssets(): void;
}
