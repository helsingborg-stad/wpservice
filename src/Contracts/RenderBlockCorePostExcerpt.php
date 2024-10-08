<?php

namespace WpService\Contracts;

interface RenderBlockCorePostExcerpt
{
    /**
     * Renders the `core/post-excerpt` block on the server.
     *
     * @since 5.8.0
     *
     * @param array $attributes Block attributes.
     * @param string $content    Block default content.
     * @param \WP_Block $block      Block instance.
     * @return string Returns the filtered post excerpt for the current post wrapped inside "p" tags.
     */
    public function renderBlockCorePostExcerpt(array $attributes, string $content, \WP_Block $block): string;
}
