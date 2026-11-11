<?php

namespace WpService\Contracts;

interface RenderBlockCoreTermCount
{
/**
 * Renders the `core/term-count` block on the server.
 *
 * @since 6.9.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the count of the current taxonomy term wrapped inside a heading tag.
 */
    public function renderBlockCoreTermCount(array $attributes, string $content, \WP_Block $block): string;
}
