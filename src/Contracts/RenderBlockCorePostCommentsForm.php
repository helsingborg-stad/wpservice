<?php

namespace WpService\Contracts;

interface RenderBlockCorePostCommentsForm
{
    /**
 * Renders the `core/post-comments-form` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string Returns the filtered post comments form for the current post.
 */
    public function renderBlockCorePostCommentsForm(array $attributes, string $content, \WP_Block $block): string;
}
