<?php

namespace WpService\Contracts;

interface WpGetBlockStyleVariationNameFromClass
{
/**
 * Determines the block style variation names within a CSS class string.
 *
 * @since 6.6.0
 *
 * @param string $classString CSS class string to look for a variation in.
 *
 * @return array|null The block style variation name if found.
 */
    public function wpGetBlockStyleVariationNameFromClass(string $classString): array|null;
}
