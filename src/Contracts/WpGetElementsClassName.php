<?php

namespace WpService\Contracts;

interface WpGetElementsClassName
{
    /**
 * Gets the elements class names.
 *
 * @since 6.0.0
 * @access private
 *
 * @param array $block Block object.
 * @return string The unique class name.
 */
    public function wpGetElementsClassName(array $block): string;
}
