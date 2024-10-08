<?php

namespace WpService\Contracts;

interface WpRegisterPositionSupport
{
    /**
 * Registers the style block attribute for block types that support it.
 *
 * @since 6.2.0
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterPositionSupport(\WP_Block_Type $blockType): void;
}
