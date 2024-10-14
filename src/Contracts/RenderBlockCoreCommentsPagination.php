<?php

namespace WpService\Contracts;

interface RenderBlockCoreCommentsPagination
{
/**
 * Renders the `core/comments-pagination` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 *
 * @return string Returns the wrapper for the Comments pagination.
 */
    public function renderBlockCoreCommentsPagination(array $attributes, string $content): string;
}
