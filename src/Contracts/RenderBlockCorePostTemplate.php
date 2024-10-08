<?php

namespace WpService\Contracts;

interface RenderBlockCorePostTemplate
{
    /**
 * Renders the `core/post-template` block on the server.
 *
 * @since 6.3.0 Changed render_block_context priority to `1`.
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the output of the query, structured using the layout defined by the block's inner blocks.
 */
    public function renderBlockCorePostTemplate(array $attributes, string $content, \WP_Block $block): string;
}
