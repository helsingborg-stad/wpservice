<?php

namespace WpService\Contracts;

interface RenderBlockCoreSiteLogo
{
/**
 * Renders the `core/site-logo` block on the server.
 *
 * @since 5.8.0
 *
 * @param array $attributes The block attributes.
 *
 * @return string The render.
 */
    public function renderBlockCoreSiteLogo(array $attributes): string;
}
