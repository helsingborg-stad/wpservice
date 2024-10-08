<?php

namespace WpService\Contracts;

interface WpRegisterTypographySupport
{
    /**
 * Registers the style and typography block attributes for block types that support it.
 *
 * @since 5.6.0
 * @since 6.3.0 Added support for text-columns.
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterTypographySupport(\WP_Block_Type $blockType): void;
}
