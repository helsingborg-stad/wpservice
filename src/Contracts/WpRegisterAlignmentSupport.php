<?php

namespace WpService\Contracts;

interface WpRegisterAlignmentSupport
{
    /**
 * Registers the align block attribute for block types that support it.
 *
 * @since 5.6.0
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterAlignmentSupport(\WP_Block_Type $blockType): void;
}
