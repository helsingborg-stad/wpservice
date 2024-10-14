<?php

namespace WpService\Contracts;

interface RenderBlockCoreCommentReplyLink
{
/**
 * Renders the `core/comment-reply-link` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string Return the post comment's reply link.
 */
    public function renderBlockCoreCommentReplyLink(array $attributes, string $content, \WP_Block $block): string;
}
