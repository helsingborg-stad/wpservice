<?php

namespace WpService\Contracts;

interface WpRegisterBackgroundSupport
{
    /**
 * Registers the style block attribute for block types that support it.
 *
 * @since 6.4.0
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterBackgroundSupport(\WP_Block_Type $blockType): void;
}
