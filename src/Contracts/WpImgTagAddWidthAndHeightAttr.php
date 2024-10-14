<?php

namespace WpService\Contracts;

interface WpImgTagAddWidthAndHeightAttr
{
/**
 * Adds `width` and `height` attributes to an `img` HTML tag.
 *
 * @since 5.5.0
 *
 * @param string $image         The HTML `img` tag where the attribute should be added.
 * @param string $context       Additional context to pass to the filters.
 * @param int $attachmentId Image attachment ID.
 * @return string Converted 'img' element with 'width' and 'height' attributes added.
 */
    public function wpImgTagAddWidthAndHeightAttr(string $image, string $context, int $attachmentId): string;
}
