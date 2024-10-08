<?php

namespace WpService\Contracts;

interface WpResolveBlockStyleVariationRefValues
{
    /**
 * Recursively resolves any `ref` values within a block style variation's data.
 *
 * @since 6.6.0
 * @access private
 *
 * @param array $variationData Reference to the variation data being processed.
 * @param array $themeJson     Theme.json data to retrieve referenced values from.
 */
    public function wpResolveBlockStyleVariationRefValues(array $variationData, array $themeJson): void;
}
