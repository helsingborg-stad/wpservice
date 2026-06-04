<?php

namespace WpService\Contracts;

interface RenderBlockCorePostCommentsCount
{
/**
 * Renders the `core/post-comments-count` block on the server.
 *
 * @since 6.9.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string Returns the filtered post comments count for the current post.
 */
    public function renderBlockCorePostCommentsCount(array $attributes, string $content, \WP_Block $block): string;
}
