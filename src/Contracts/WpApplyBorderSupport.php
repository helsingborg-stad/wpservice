<?php

namespace WpService\Contracts;

interface WpApplyBorderSupport
{
    /**
 * Adds CSS classes and inline styles for border styles to the incoming
 * attributes array. This will be applied to the block markup in the front-end.
 *
 * @since 5.8.0
 * @since 6.1.0 Implemented the style engine to generate CSS and classnames.
 * @access private
 *
 * @param \WP_Block_Type $blockType       Block type.
 * @param array $blockAttributes Block attributes.
 * @return array Border CSS classes and inline styles.
 */
    public function wpApplyBorderSupport(\WP_Block_Type $blockType, array $blockAttributes): array;
}
