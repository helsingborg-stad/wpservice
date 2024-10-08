<?php

namespace WpService\Contracts;

interface WpApplyDimensionsSupport
{
    /**
 * Adds CSS classes for block dimensions to the incoming attributes array.
 * This will be applied to the block markup in the front-end.
 *
 * @since 5.9.0
 * @since 6.2.0 Added `minHeight` support.
 * @access private
 *
 * @param \WP_Block_Type $blockType       Block Type.
 * @param array $blockAttributes Block attributes.
 * @return array Block dimensions CSS classes and inline styles.
 */
    public function wpApplyDimensionsSupport(\WP_Block_Type $blockType, array $blockAttributes): array;
}
