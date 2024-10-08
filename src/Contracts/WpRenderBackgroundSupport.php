<?php

namespace WpService\Contracts;

interface WpRenderBackgroundSupport
{
    /**
 * Renders the background styles to the block wrapper.
 * This block support uses the `render_block` hook to ensure that
 * it is also applied to non-server-rendered blocks.
 *
 * @since 6.4.0
 * @since 6.5.0 Added support for `backgroundPosition` and `backgroundRepeat` output.
 * @since 6.6.0 Removed requirement for `backgroundImage.source`. A file/url is the default.
 *
 * @access private
 *
 * @param string $blockContent Rendered block content.
 * @param array $block         Block object.
 * @return string Filtered block content.
 */
    public function wpRenderBackgroundSupport(string $blockContent, array $block): string;
}
