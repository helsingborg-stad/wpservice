<?php

namespace WpService\Contracts;

interface RenderBlockCorePostAuthorName
{
    /**
     * Renders the `core/post-author-name` block on the server.
     *
     * @since 6.2.0
     *
     * @param array $attributes Block attributes.
     * @param string $content    Block default content.
     * @param WP_Block $block      Block instance.
     * @return string Returns the rendered post author name block.
     */
    public function renderBlockCorePostAuthorName(mixed $attributes, mixed $content, mixed $block): string;
}
