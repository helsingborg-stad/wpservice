<?php

namespace WpService\Contracts;

interface RenderBlockCoreImage
{
    /**
     * Renders the `core/image` block on the server,
     * adding a data-id attribute to the element if core/gallery has added on pre-render.
     *
     * @since 5.9.0
     *
     * @param array $attributes The block attributes.
     * @param string $content    The block content.
     * @param \WP_Block $block      The block object.
     *
     * @return string The block content with the data-id attribute added.
     */
    public function renderBlockCoreImage(array $attributes, string $content, \WP_Block $block): string;
}
