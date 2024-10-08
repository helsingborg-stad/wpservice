<?php

namespace WpService\Contracts;

interface WpRenderLayoutSupportFlag
{
    /**
 * Renders the layout config to the block wrapper.
 *
 * @since 5.8.0
 * @since 6.3.0 Adds compound class to layout wrapper for global spacing styles.
 * @since 6.3.0 Check for layout support via the `layout` key with fallback to `__experimentalLayout`.
 * @since 6.6.0 Removed duplicate container class from layout styles.
 * @access private
 *
 * @param string $blockContent Rendered block content.
 * @param array $block         Block object.
 * @return string Filtered block content.
 */
    public function wpRenderLayoutSupportFlag(string $blockContent, array $block): string;
}
