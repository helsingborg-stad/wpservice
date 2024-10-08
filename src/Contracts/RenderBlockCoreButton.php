<?php

namespace WpService\Contracts;

interface RenderBlockCoreButton
{
    /**
 * Renders the `core/button` block on the server,
 *
 * @since 6.6.0
 *
 * @param array $attributes The block attributes.
 * @param string $content    The block content.
 * @param \WP_Block $block      The block object.
 *
 * @return string The block content.
 */
    public function renderBlockCoreButton(array $attributes, string $content, \WP_Block $block): string;
}
