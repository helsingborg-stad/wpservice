<?php

namespace WpService\Contracts;

interface WpImgTagAddAutoSizes
{
/**
 * Adds 'auto' to the sizes attribute to the image, if the image is lazy loaded and does not already include it.
 *
 * @since 6.7.0
 *
 * @param string $image The image tag markup being filtered.
 * @return string The filtered image tag markup.
 */
    public function wpImgTagAddAutoSizes(string $image): string;
}
