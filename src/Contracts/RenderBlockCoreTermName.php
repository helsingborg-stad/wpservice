<?php

namespace WpService\Contracts;

interface RenderBlockCoreTermName
{
/**
 * Renders the `core/term-name` block on the server.
 *
 * @since 6.9.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the name of the current taxonomy term wrapped inside a heading tag.
 */
    public function renderBlockCoreTermName(array $attributes, string $content, \WP_Block $block): string;
}
