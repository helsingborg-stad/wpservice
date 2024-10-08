<?php

namespace WpService\Contracts;

interface RenderBlockCoreNavigation
{
    /**
 * Renders the `core/navigation` block on server.
 *
 * @since 5.9.0
 *
 * @param array $attributes The block attributes.
 * @param string $content    The saved content.
 * @param \WP_Block $block      The parsed block.
 *
 * @return string Returns the navigation block markup.
 */
    public function renderBlockCoreNavigation(array $attributes, string $content, \WP_Block $block): string;
}
