<?php

namespace WpService\Contracts;

interface ImageResizeDimensions
{
    /**
 * Retrieves calculated resize dimensions for use in WP_Image_Editor.
 *
 * Calculates dimensions and coordinates for a resized image that fits
 * within a specified width and height.
 *
 * @since 2.5.0
 *
 * @param int $origW Original width in pixels.
 * @param int $origH Original height in pixels.
 * @param int $destW New width in pixels.
 * @param int $destH New height in pixels.
 * @param bool|array $crop   {
 *     Optional. Image cropping behavior. If false, the image will be scaled (default).
 *     If true, image will be cropped to the specified dimensions using center positions.
 *     If an array, the image will be cropped using the array to specify the crop location:
 *
 *     @type string $0 The x crop position. Accepts 'left' 'center', or 'right'.
 *     @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'.
 * }
 * @return array|false Returned array matches parameters for `imagecopyresampled()`. False on failure.
 */
    public function imageResizeDimensions(int $origW, int $origH, int $destW, int $destH, bool|array $crop = false): array|false;
}
