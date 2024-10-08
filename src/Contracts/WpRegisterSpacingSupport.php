<?php

namespace WpService\Contracts;

interface WpRegisterSpacingSupport
{
    /**
 * Registers the style block attribute for block types that support it.
 *
 * @since 5.8.0
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterSpacingSupport(\WP_Block_Type $blockType): void;
}
