<?php

namespace WpService\Contracts;

interface AddImageSize
{
/**
 * Registers a new image size.
 *
 * @since 2.9.0
 *
 * @global array $_wp_additional_image_sizes Associative array of additional image sizes.
 *
 * @param string $name   Image size identifier.
 * @param int $width  Optional. Image width in pixels. Default 0.
 * @param int $height Optional. Image height in pixels. Default 0.
 * @param bool|array $crop   {
 *     Optional. Image cropping behavior. If false, the image will be scaled (default).
 *     If true, image will be cropped to the specified dimensions using center positions.
 *     If an array, the image will be cropped using the array to specify the crop location:
 *
 * @type string $0 The x crop position. Accepts 'left' 'center', or 'right'.
 * @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'.
 * }
 */
    public function addImageSize(string $name, int $width = 0, int $height = 0, bool|array $crop = false): void;
}
