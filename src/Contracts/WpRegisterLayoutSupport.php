<?php

namespace WpService\Contracts;

interface WpRegisterLayoutSupport
{
    /**
 * Registers the layout block attribute for block types that support it.
 *
 * @since 5.8.0
 * @since 6.3.0 Check for layout support via the `layout` key with fallback to `__experimentalLayout`.
 * @access private
 *
 * @param \WP_Block_Type $blockType Block Type.
 */
    public function wpRegisterLayoutSupport(\WP_Block_Type $blockType): void;
}
