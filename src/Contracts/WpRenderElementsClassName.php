<?php

namespace WpService\Contracts;

interface WpRenderElementsClassName
{
    /**
     * Ensure the elements block support class name generated, and added to
     * block attributes, in the `render_block_data` filter gets applied to the
     * block's markup.
     *
     * @see wp_render_elements_support_styles
     * @since 6.6.0
     *
     * @param string $blockContent Rendered block content.
     * @param array $block         Block object.
     * @return string                Filtered block content.
     */
    public function wpRenderElementsClassName(string $blockContent, array $block): string;
}
