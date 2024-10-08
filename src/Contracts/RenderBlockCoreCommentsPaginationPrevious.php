<?php

namespace WpService\Contracts;

interface RenderBlockCoreCommentsPaginationPrevious
{
    /**
     * Renders the `core/comments-pagination-previous` block on the server.
     *
     * @since 6.0.0
     *
     * @param array $attributes Block attributes.
     * @param string $content    Block default content.
     * @param \WP_Block $block      Block instance.
     *
     * @return string Returns the previous posts link for the comments pagination.
     */
    public function renderBlockCoreCommentsPaginationPrevious(array $attributes, string $content, \WP_Block $block): string;
}
