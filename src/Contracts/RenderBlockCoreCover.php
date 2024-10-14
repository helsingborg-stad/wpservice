<?php

namespace WpService\Contracts;

interface RenderBlockCoreCover
{
/**
 * Renders the `core/cover` block on server.
 *
 * @since 6.0.0
 *
 * @param array $attributes The block attributes.
 * @param string $content    The block rendered content.
 *
 * @return string Returns the cover block markup, if useFeaturedImage is true.
 */
    public function renderBlockCoreCover(array $attributes, string $content): string;
}
