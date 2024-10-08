<?php

namespace WpService\Contracts;

interface WpRegisterCustomClassnameSupport
{
    /**
 * Registers the custom classname block attribute for block types that support it.
 *
 * @since 5.6.0
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterCustomClassnameSupport(\WP_Block_Type $blockType): void;
}
