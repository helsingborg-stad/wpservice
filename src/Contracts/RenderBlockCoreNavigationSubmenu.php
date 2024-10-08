<?php

namespace WpService\Contracts;

interface RenderBlockCoreNavigationSubmenu
{
    /**
     * Renders the `core/navigation-submenu` block.
     *
     * @since 5.9.0
     *
     * @param array $attributes The block attributes.
     * @param string $content    The saved content.
     * @param \WP_Block $block      The parsed block.
     *
     * @return string Returns the post content with the legacy widget added.
     */
    public function renderBlockCoreNavigationSubmenu(array $attributes, string $content, \WP_Block $block): string;
}
