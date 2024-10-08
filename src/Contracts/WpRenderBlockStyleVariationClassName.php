<?php

namespace WpService\Contracts;

interface WpRenderBlockStyleVariationClassName
{
    /**
 * Ensure the variation block support class name generated and added to
 * block attributes in the `render_block_data` filter gets applied to the
 * block's markup.
 *
 * @see wp_render_block_style_variation_support_styles
 *
 * @since 6.6.0
 * @access private
 *
 * @param string $blockContent Rendered block content.
 * @param array $block         Block object.
 *
 * @return string                Filtered block content.
 */
    public function wpRenderBlockStyleVariationClassName(string $blockContent, array $block): string;
}
