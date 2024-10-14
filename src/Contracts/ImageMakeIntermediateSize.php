<?php

namespace WpService\Contracts;

interface ImageMakeIntermediateSize
{
/**
 * Resizes an image to make a thumbnail or intermediate size.
 *
 * The returned array has the file size, the image width, and image height. The
 * {@see 'image_make_intermediate_size'} filter can be used to hook in and change the
 * values of the returned array. The only parameter is the resized file path.
 *
 * @since 2.5.0
 *
 * @param string $file   File path.
 * @param int $width  Image width.
 * @param int $height Image height.
 * @param bool|array $crop   {
 *     Optional. Image cropping behavior. If false, the image will be scaled (default).
 *     If true, image will be cropped to the specified dimensions using center positions.
 *     If an array, the image will be cropped using the array to specify the crop location:
 *
 * @type string $0 The x crop position. Accepts 'left' 'center', or 'right'.
 * @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'.
 * }
 * @return array|false Metadata array on success. False if no image was created.
 */
    public function imageMakeIntermediateSize(string $file, int $width, int $height, bool|array $crop = false): array|false;
}
