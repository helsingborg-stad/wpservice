<?php

namespace WpService\Contracts;

interface WpRegisterShadowSupport
{
    /**
 * Registers the style and shadow block attributes for block types that support it.
 *
 * @since 6.3.0
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterShadowSupport(\WP_Block_Type $blockType): void;
}
