<?php

namespace WpService\Contracts;

interface BlockCoreNavigationLinkRenderSubmenuIcon
{
    /**
     * Returns the top-level submenu SVG chevron icon.
     *
     * @since 5.9.0
     *
     * @return string
     */
    public function blockCoreNavigationLinkRenderSubmenuIcon(): string;
}
