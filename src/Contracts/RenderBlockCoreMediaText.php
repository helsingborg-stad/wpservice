<?php

namespace WpService\Contracts;

interface RenderBlockCoreMediaText
{
    /**
 * Renders the `core/media-text` block on server.
 *
 * @since 6.6.0
 *
 * @param array $attributes The block attributes.
 * @param string $content    The block rendered content.
 *
 * @return string Returns the Media & Text block markup, if useFeaturedImage is true.
 */
    public function renderBlockCoreMediaText(array $attributes, string $content): string;
}
