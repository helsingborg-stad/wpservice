<?php

namespace WpService\Contracts;

interface RenderBlockCoreCategories
{
/**
 * Renders the `core/categories` block on server.
 *
 * @since 5.0.0
 * @since 6.7.0 Enable client-side rendering if enhancedPagination context is true.
 *
 * @param array $attributes The block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the categories list/dropdown markup.
 */
    public function renderBlockCoreCategories(array $attributes, string $content, \WP_Block $block): string;
}
