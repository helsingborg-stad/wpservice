<?php

namespace WpService\Contracts;

interface RenderBlockCoreWidgetGroup
{
    /**
     * Renders the 'core/widget-group' block.
     *
     * @since 5.9.0
     *
     * @global array      $wp_registered_sidebars
     * @global int|string $_sidebar_being_rendered
     *
     * @param array $attributes The block attributes.
     * @param string $content The block content.
     * @param \WP_Block $block The block.
     *
     * @return string Rendered block.
     */
    public function renderBlockCoreWidgetGroup(array $attributes, string $content, \WP_Block $block): string;
}
