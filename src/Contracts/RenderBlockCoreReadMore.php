<?php

namespace WpService\Contracts;

interface RenderBlockCoreReadMore
{
/**
 * Renders the `core/read-more` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string  Returns the post link.
 */
    public function renderBlockCoreReadMore(array $attributes, string $content, \WP_Block $block): string;
}
