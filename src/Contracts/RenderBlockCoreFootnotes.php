<?php

namespace WpService\Contracts;

interface RenderBlockCoreFootnotes
{
/**
 * Renders the `core/footnotes` block on the server.
 *
 * @since 6.3.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the HTML representing the footnotes.
 */
    public function renderBlockCoreFootnotes(array $attributes, string $content, \WP_Block $block): string;
}
