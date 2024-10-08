<?php

namespace WpService\Contracts;

interface RenderBlockCorePageList
{
    /**
     * Renders the `core/page-list` block on server.
     *
     * @since 5.8.0
     *
     * @param array $attributes The block attributes.
     * @param string $content    The saved content.
     * @param \WP_Block $block      The parsed block.
     *
     * @return string Returns the page list markup.
     */
    public function renderBlockCorePageList(array $attributes, string $content, \WP_Block $block): string;
}
