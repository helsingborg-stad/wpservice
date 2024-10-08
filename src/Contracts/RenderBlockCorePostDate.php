<?php

namespace WpService\Contracts;

interface RenderBlockCorePostDate
{
    /**
 * Renders the `core/post-date` block on the server.
 *
 * @since 5.8.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string Returns the filtered post date for the current post wrapped inside "time" tags.
 */
    public function renderBlockCorePostDate(array $attributes, string $content, \WP_Block $block): string;
}
