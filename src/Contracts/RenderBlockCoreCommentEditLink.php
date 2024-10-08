<?php

namespace WpService\Contracts;

interface RenderBlockCoreCommentEditLink
{
    /**
     * Renders the `core/comment-edit-link` block on the server.
     *
     * @since 6.0.0
     *
     * @param array $attributes Block attributes.
     * @param string $content    Block default content.
     * @param \WP_Block $block      Block instance.
     *
     * @return string Return the post comment's date.
     */
    public function renderBlockCoreCommentEditLink(array $attributes, string $content, \WP_Block $block): string;
}
