<?php

namespace WpService\Contracts;

interface WpRegisterColorsSupport
{
    /**
 * Registers the style and colors block attributes for block types that support it.
 *
 * @since 5.6.0
 * @since 6.1.0 Improved $color_support assignment optimization.
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterColorsSupport(\WP_Block_Type $blockType): void;
}
