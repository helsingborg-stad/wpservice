<?php

namespace WpService\Contracts;

interface RenderBlockCorePostCommentsLink
{
/**
 * Renders the `core/post-comments-link` block on the server.
 *
 * @since 6.9.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string   Returns the rendered link.
 */
    public function renderBlockCorePostCommentsLink(array $attributes, string $content, \WP_Block $block): string;
}
