<?php

namespace WpService\Contracts;

interface RenderBlockCoreHomeLink
{
    /**
     * Renders the `core/home-link` block.
     *
     * @since 6.0.0
     *
     * @param array $attributes The block attributes.
     * @param string $content    The saved content.
     * @param \WP_Block $block      The parsed block.
     *
     * @return string Returns the post content with the home url added.
     */
    public function renderBlockCoreHomeLink(array $attributes, string $content, \WP_Block $block): string;
}
