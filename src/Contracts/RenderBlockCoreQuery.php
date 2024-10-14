<?php

namespace WpService\Contracts;

interface RenderBlockCoreQuery
{
/**
 * Modifies the static `core/query` block on the server.
 *
 * @since 6.4.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      The block instance.
 *
 * @return string Returns the modified output of the query block.
 */
    public function renderBlockCoreQuery(array $attributes, string $content, \WP_Block $block): string;
}
