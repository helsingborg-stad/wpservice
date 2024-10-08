<?php

namespace WpService\Contracts;

interface WpShouldAddElementsClassName
{
    /**
 * Determines whether an elements class name should be added to the block.
 *
 * @since 6.6.0
 * @access private
 *
 * @param array $block   Block object.
 * @param array $options Per element type options e.g. whether to skip serialization.
 * @return boolean Whether the block needs an elements class name.
 */
    public function wpShouldAddElementsClassName(array $block, array $options): bool;
}
