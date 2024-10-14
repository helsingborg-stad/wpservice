<?php

namespace WpService\Contracts;

interface RenderBlockCoreCommentsPaginationNext
{
/**
 * Renders the `core/comments-pagination-next` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the next comments link for the query pagination.
 */
    public function renderBlockCoreCommentsPaginationNext(array $attributes, string $content, \WP_Block $block): string;
}
