<?php

namespace WpService\Contracts;

interface WpRegisterBorderSupport
{
    /**
 * Registers the style attribute used by the border feature if needed for block
 * types that support borders.
 *
 * @since 5.8.0
 * @since 6.1.0 Improved conditional blocks optimization.
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterBorderSupport(\WP_Block_Type $blockType): void;
}
