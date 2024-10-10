<?php

namespace WpService\Contracts;

interface RenderBlockCorePostAuthor
{
    /**
     * Renders the `core/post-author` block on the server.
     *
     * @since 5.9.0
     *
     * @param array $attributes Block attributes.
     * @param string $content    Block default content.
     * @param WP_Block $block      Block instance.
     * @return string Returns the rendered author block.
     */
    public function renderBlockCorePostAuthor(mixed $attributes, mixed $content, mixed $block): string;
}
