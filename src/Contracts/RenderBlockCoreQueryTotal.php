<?php

namespace WpService\Contracts;

interface RenderBlockCoreQueryTotal
{
/**
 * Renders the `query-total` block on the server.
 *
 * @since 6.8.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string The rendered block content.
 */
    public function renderBlockCoreQueryTotal(array $attributes, string $content, \WP_Block $block): string;
}
