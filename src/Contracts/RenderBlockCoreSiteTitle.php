<?php

namespace WpService\Contracts;

interface RenderBlockCoreSiteTitle
{
    /**
 * Renders the `core/site-title` block on the server.
 *
 * @since 5.8.0
 *
 * @param array $attributes The block attributes.
 *
 * @return string The render.
 */
    public function renderBlockCoreSiteTitle(array $attributes): string;
}
