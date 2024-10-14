<?php

namespace WpService\Contracts;

interface WpImgTagAddLoadingOptimizationAttrs
{
/**
 * Adds optimization attributes to an `img` HTML tag.
 *
 * @since 6.3.0
 *
 * @param string $image   The HTML `img` tag where the attribute should be added.
 * @param string $context Additional context to pass to the filters.
 * @return string Converted `img` tag with optimization attributes added.
 */
    public function wpImgTagAddLoadingOptimizationAttrs(string $image, string $context): string;
}
