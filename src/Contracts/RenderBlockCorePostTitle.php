<?php

namespace WpService\Contracts;

interface RenderBlockCorePostTitle
{
/**
 * Renders the `core/post-title` block on the server.
 *
 * @since 6.3.0 Omitting the $post argument from the `get_the_title`.
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the filtered post title for the current post wrapped inside "h1" tags.
 */
    public function renderBlockCorePostTitle(array $attributes, string $content, \WP_Block $block): string;
}
