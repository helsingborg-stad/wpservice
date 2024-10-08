<?php

namespace WpService\Contracts;

interface RenderBlockCorePostFeaturedImage
{
    /**
     * Renders the `core/post-featured-image` block on the server.
     *
     * @since 5.8.0
     *
     * @param array $attributes Block attributes.
     * @param string $content    Block default content.
     * @param \WP_Block $block      Block instance.
     * @return string Returns the featured image for the current post.
     */
    public function renderBlockCorePostFeaturedImage(array $attributes, string $content, \WP_Block $block): string;
}
