<?php

namespace WpService\Contracts;

interface RenderBlockCorePostTimeToRead
{
/**
 * Renders the `core/post-time-to-read` block on the server.
 *
 * @since 6.9.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string Returns the rendered post author name block.
 */
    public function renderBlockCorePostTimeToRead(array $attributes, string $content, \WP_Block $block): string;
}
