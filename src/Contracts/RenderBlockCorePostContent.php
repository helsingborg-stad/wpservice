<?php

namespace WpService\Contracts;

interface RenderBlockCorePostContent
{
/**
 * Renders the `core/post-content` block on the server.
 *
 * @since 5.8.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string Returns the filtered post content of the current post.
 */
    public function renderBlockCorePostContent(array $attributes, string $content, \WP_Block $block): string;
}
