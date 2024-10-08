<?php

namespace WpService\Contracts;

interface WpApplyCustomClassnameSupport
{
    /**
 * Adds the custom classnames to the output.
 *
 * @since 5.6.0
 * @access private
 *
 * @param \WP_Block_Type $blockType       Block Type.
 * @param array $blockAttributes Block attributes.
 *
 * @return array Block CSS classes and inline styles.
 */
    public function wpApplyCustomClassnameSupport(\WP_Block_Type $blockType, array $blockAttributes): array;
}
