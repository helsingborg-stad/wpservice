<?php

namespace WpService\Contracts;

interface WpApplyColorsSupport
{
    /**
 * Adds CSS classes and inline styles for colors to the incoming attributes array.
 * This will be applied to the block markup in the front-end.
 *
 * @since 5.6.0
 * @since 6.1.0 Implemented the style engine to generate CSS and classnames.
 * @access private
 *
 * @param \WP_Block_Type $blockType       Block type.
 * @param array $blockAttributes Block attributes.
 *
 * @return array Colors CSS classes and inline styles.
 */
    public function wpApplyColorsSupport(\WP_Block_Type $blockType, array $blockAttributes): array;
}
