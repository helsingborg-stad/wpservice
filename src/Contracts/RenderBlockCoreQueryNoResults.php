<?php

namespace WpService\Contracts;

interface RenderBlockCoreQueryNoResults
{
/**
 * Renders the `core/query-no-results` block on the server.
 *
 * @since 6.0.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the wrapper for the no results block.
 */
    public function renderBlockCoreQueryNoResults(array $attributes, string $content, \WP_Block $block): string;
}
