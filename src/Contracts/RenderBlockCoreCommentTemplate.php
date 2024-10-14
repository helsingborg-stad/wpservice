<?php

namespace WpService\Contracts;

interface RenderBlockCoreCommentTemplate
{
/**
 * Renders the `core/comment-template` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the HTML representing the comments using the layout
 * defined by the block's inner blocks.
 */
    public function renderBlockCoreCommentTemplate(array $attributes, string $content, \WP_Block $block): string;
}
