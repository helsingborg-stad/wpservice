<?php

namespace WpService\Contracts;

interface SetPostThumbnailSize
{
    /**
 * Registers an image size for the post thumbnail.
 *
 * @since 2.9.0
 *
 * @see add_image_size() for details on cropping behavior.
 *
 * @param int $width  Image width in pixels.
 * @param int $height Image height in pixels.
 * @param bool|array $crop   {
 *     Optional. Image cropping behavior. If false, the image will be scaled (default).
 *     If true, image will be cropped to the specified dimensions using center positions.
 *     If an array, the image will be cropped using the array to specify the crop location:
 *
 *     @type string $0 The x crop position. Accepts 'left' 'center', or 'right'.
 *     @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'.
 * }
 */
    public function setPostThumbnailSize(int $width = 0, int $height = 0, bool|array $crop = false): void;
}
