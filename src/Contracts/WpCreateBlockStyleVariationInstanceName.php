<?php

namespace WpService\Contracts;

interface WpCreateBlockStyleVariationInstanceName
{
    /**
 * Generate block style variation instance name.
 *
 * @since 6.6.0
 * @access private
 *
 * @param array $block     Block object.
 * @param string $variation Slug for the block style variation.
 *
 * @return string The unique variation name.
 */
    public function wpCreateBlockStyleVariationInstanceName(array $block, string $variation): string;
}
