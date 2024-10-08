<?php

namespace WpService\Contracts;

interface RenderBlockCoreSiteTagline
{
    /**
     * Renders the `core/site-tagline` block on the server.
     *
     * @since 5.8.0
     *
     * @param array $attributes The block attributes.
     *
     * @return string The render.
     */
    public function renderBlockCoreSiteTagline(array $attributes): string;
}
