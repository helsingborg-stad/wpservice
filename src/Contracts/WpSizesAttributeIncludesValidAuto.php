<?php

namespace WpService\Contracts;

interface WpSizesAttributeIncludesValidAuto
{
/**
 * Checks whether the given 'sizes' attribute includes the 'auto' keyword as the first item in the list.
 *
 * Per the HTML spec, if present it must be the first entry.
 *
 * @since 6.7.0
 *
 * @param string $sizesAttr The 'sizes' attribute value.
 * @return bool True if the 'auto' keyword is present, false otherwise.
 */
    public function wpSizesAttributeIncludesValidAuto(string $sizesAttr): bool;
}
