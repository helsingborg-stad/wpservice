<?php

namespace WpService\Contracts;

interface WpRegisterDimensionsSupport
{
    /**
 * Registers the style block attribute for block types that support it.
 *
 * @since 5.9.0
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterDimensionsSupport(\WP_Block_Type $blockType): void;
}
