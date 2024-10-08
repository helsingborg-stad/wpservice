<?php

namespace WpService\Contracts;

interface RenderBlockCoreTemplatePart
{
    /**
     * Renders the `core/template-part` block on the server.
     *
     * @since 5.9.0
     *
     * @global WP_Embed $wp_embed WordPress Embed object.
     *
     * @param array $attributes The block attributes.
     *
     * @return string The render.
     */
    public function renderBlockCoreTemplatePart(array $attributes): string;
}
