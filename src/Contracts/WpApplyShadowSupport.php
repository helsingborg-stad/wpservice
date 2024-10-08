<?php

namespace WpService\Contracts;

interface WpApplyShadowSupport
{
    /**
 * Add CSS classes and inline styles for shadow features to the incoming attributes array.
 * This will be applied to the block markup in the front-end.
 *
 * @since 6.3.0
 * @since 6.6.0 Return early if __experimentalSkipSerialization is true.
 * @access private
 *
 * @param \WP_Block_Type $blockType       Block type.
 * @param array $blockAttributes Block attributes.
 * @return array Shadow CSS classes and inline styles.
 */
    public function wpApplyShadowSupport(\WP_Block_Type $blockType, array $blockAttributes): array;
}
