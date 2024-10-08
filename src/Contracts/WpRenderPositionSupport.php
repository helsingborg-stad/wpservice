<?php

namespace WpService\Contracts;

interface WpRenderPositionSupport
{
    /**
 * Renders position styles to the block wrapper.
 *
 * @since 6.2.0
 * @access private
 *
 * @param string $blockContent Rendered block content.
 * @param array $block         Block object.
 * @return string                Filtered block content.
 */
    public function wpRenderPositionSupport(string $blockContent, array $block): string;
}
