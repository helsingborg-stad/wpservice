<?php

namespace WpService\Contracts;

interface ImageConstrainSizeForEditor
{
    /**
 * Scales down the default size of an image.
 *
 * This is so that the image is a better fit for the editor and theme.
 *
 * The `$size` parameter accepts either an array or a string. The supported string
 * values are 'thumb' or 'thumbnail' for the given thumbnail size or defaults at
 * 128 width and 96 height in pixels. Also supported for the string value is
 * 'medium', 'medium_large' and 'full'. The 'full' isn't actually supported, but any value other
 * than the supported will result in the content_width size or 500 if that is
 * not set.
 *
 * Finally, there is a filter named {@see 'editor_max_image_size'}, that will be
 * called on the calculated array for width and height, respectively.
 *
 * @since 2.5.0
 *
 * @global int $content_width
 *
 * @param int $width   Width of the image in pixels.
 * @param int $height  Height of the image in pixels.
 * @param string|int[] $size    Optional. Image size. Accepts any registered image size name, or an array
 *                              of width and height values in pixels (in that order). Default 'medium'.
 * @param string $context Optional. Could be 'display' (like in a theme) or 'edit'
 *                              (like inserting into an editor). Default null.
 * @return int[] {
 *     An array of width and height values.
 *
 *     @type int $0 The maximum width in pixels.
 *     @type int $1 The maximum height in pixels.
 * }
 */
    public function imageConstrainSizeForEditor(int $width, int $height, string|array $size = 'medium', string $context = null): array;
}
