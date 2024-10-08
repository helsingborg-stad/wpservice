<?php

namespace WpService\Contracts;

interface RenderBlockCoreCommentDate
{
    /**
 * Renders the `core/comment-date` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string Return the post comment's date.
 */
    public function renderBlockCoreCommentDate(array $attributes, string $content, \WP_Block $block): string;
}
