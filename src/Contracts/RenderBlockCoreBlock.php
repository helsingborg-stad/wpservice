<?php

namespace WpService\Contracts;

interface RenderBlockCoreBlock
{
    /**
     * Renders the `core/block` block on server.
     *
     * @since 5.0.0
     *
     * @global WP_Embed $wp_embed
     *
     * @param array $attributes The block attributes.
     *
     * @return string Rendered HTML of the referenced block.
     */
    public function renderBlockCoreBlock(array $attributes): string;
}
