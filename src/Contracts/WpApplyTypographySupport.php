<?php

namespace WpService\Contracts;

interface WpApplyTypographySupport
{
    /**
 * Adds CSS classes and inline styles for typography features such as font sizes
 * to the incoming attributes array. This will be applied to the block markup in
 * the front-end.
 *
 * @since 5.6.0
 * @since 6.1.0 Used the style engine to generate CSS and classnames.
 * @since 6.3.0 Added support for text-columns.
 * @access private
 *
 * @param \WP_Block_Type $blockType       Block type.
 * @param array $blockAttributes Block attributes.
 * @return array Typography CSS classes and inline styles.
 */
    public function wpApplyTypographySupport(\WP_Block_Type $blockType, array $blockAttributes): array;
}
