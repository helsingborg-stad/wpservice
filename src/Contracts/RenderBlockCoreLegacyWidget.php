<?php

namespace WpService\Contracts;

interface RenderBlockCoreLegacyWidget
{
/**
 * Renders the 'core/legacy-widget' block.
 *
 * @since 5.8.0
 *
 * @global WP_Widget_Factory $wp_widget_factory.
 *
 * @param array $attributes The block attributes.
 *
 * @return string Rendered block.
 */
    public function renderBlockCoreLegacyWidget(array $attributes): string;
}
