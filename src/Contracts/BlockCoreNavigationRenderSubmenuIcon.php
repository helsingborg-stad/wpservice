<?php

namespace WpService\Contracts;

interface BlockCoreNavigationRenderSubmenuIcon
{
    /**
 * Returns the top-level submenu SVG chevron icon.
 *
 * @since 5.9.0
 *
 * @return string
 */
    public function blockCoreNavigationRenderSubmenuIcon(): string;
}
