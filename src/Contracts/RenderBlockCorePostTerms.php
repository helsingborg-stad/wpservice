<?php

namespace WpService\Contracts;

interface RenderBlockCorePostTerms
{
    /**
     * Renders the `core/post-terms` block on the server.
     *
     * @since 5.8.0
     *
     * @param array $attributes Block attributes.
     * @param string $content    Block default content.
     * @param \WP_Block $block      Block instance.
     * @return string Returns the filtered post terms for the current post wrapped inside "a" tags.
     */
    public function renderBlockCorePostTerms(array $attributes, string $content, \WP_Block $block): string;
}
