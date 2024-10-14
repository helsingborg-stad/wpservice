<?php

namespace WpService\Contracts;

interface RenderBlockCoreFile
{
/**
 * When the `core/file` block is rendering, check if we need to enqueue the `wp-block-file-view` script.
 *
 * @since 5.8.0
 *
 * @param array $attributes The block attributes.
 * @param string $content    The block content.
 * @param WP_Block $block      The parsed block.
 *
 * @return string Returns the block content.
 */
    public function renderBlockCoreFile(array $attributes, string $content): string;
}
