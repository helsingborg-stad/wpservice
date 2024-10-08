<?php

namespace WpService\Contracts;

interface RenderBlockCoreShortcode
{
    /**
 * Performs wpautop() on the shortcode block content.
 *
 * @since 5.0.0
 *
 * @param array $attributes The block attributes.
 * @param string $content    The block content.
 *
 * @return string Returns the block content.
 */
    public function renderBlockCoreShortcode(array $attributes, string $content): string;
}
