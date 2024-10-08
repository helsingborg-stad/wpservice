<?php

namespace WpService\Contracts;

interface RenderBlockCoreCommentsPaginationNumbers
{
    /**
 * Renders the `core/comments-pagination-numbers` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the pagination numbers for the comments.
 */
    public function renderBlockCoreCommentsPaginationNumbers(array $attributes, string $content, \WP_Block $block): string;
}
