<?php

namespace WpService\Contracts;

interface RenderBlockCoreSocialLink
{
    /**
 * Renders the `core/social-link` block on server.
 *
 * @since 5.4.0
 *
 * @param Array $attributes The block attributes.
 * @param String $content    InnerBlocks content of the Block.
 * @param \WP_Block $block      Block object.
 *
 * @return string Rendered HTML of the referenced block.
 */
    public function renderBlockCoreSocialLink(array $attributes, string $content, \WP_Block $block): string;
}
