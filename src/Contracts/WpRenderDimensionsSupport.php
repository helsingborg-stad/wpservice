<?php

namespace WpService\Contracts;

interface WpRenderDimensionsSupport
{
    /**
 * Renders server-side dimensions styles to the block wrapper.
 * This block support uses the `render_block` hook to ensure that
 * it is also applied to non-server-rendered blocks.
 *
 * @since 6.5.0
 * @access private
 *
 * @param string $blockContent Rendered block content.
 * @param array $block         Block object.
 * @return string                Filtered block content.
 */
    public function wpRenderDimensionsSupport(string $blockContent, array $block): string;
}
