<?php

namespace WpService\Contracts;

interface RenderBlockCorePostAuthorBiography
{
    /**
     * Renders the `core/post-author-biography` block on the server.
     *
     * @since 6.0.0
     *
     * @param array $attributes Block attributes.
     * @param string $content    Block default content.
     * @param \WP_Block $block      Block instance.
     * @return string Returns the rendered post author biography block.
     */
    public function renderBlockCorePostAuthorBiography(array $attributes, string $content, \WP_Block $block): string;
}
