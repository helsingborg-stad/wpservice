<?php

namespace WpService\Contracts;

interface WpApplySpacingSupport
{
    /**
 * Adds CSS classes for block spacing to the incoming attributes array.
 * This will be applied to the block markup in the front-end.
 *
 * @since 5.8.0
 * @since 6.1.0 Implemented the style engine to generate CSS and classnames.
 * @access private
 *
 * @param \WP_Block_Type $blockType       Block Type.
 * @param array $blockAttributes Block attributes.
 * @return array Block spacing CSS classes and inline styles.
 */
    public function wpApplySpacingSupport(\WP_Block_Type $blockType, array $blockAttributes): array;
}
