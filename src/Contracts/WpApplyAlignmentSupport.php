<?php

namespace WpService\Contracts;

interface WpApplyAlignmentSupport
{
    /**
 * Adds CSS classes for block alignment to the incoming attributes array.
 * This will be applied to the block markup in the front-end.
 *
 * @since 5.6.0
 * @access private
 *
 * @param \WP_Block_Type $blockType       Block Type.
 * @param array $blockAttributes Block attributes.
 * @return array Block alignment CSS classes and inline styles.
 */
    public function wpApplyAlignmentSupport(\WP_Block_Type $blockType, array $blockAttributes): array;
}
