<?php

namespace WpService\Contracts;

interface ImageDownsize
{
/**
 * Scales an image to fit a particular size (such as 'thumb' or 'medium').
 *
 * The URL might be the original image, or it might be a resized version. This
 * function won't create a new resized copy, it will just return an already
 * resized one if it exists.
 *
 * A plugin may use the {@see 'image_downsize'} filter to hook into and offer image
 * resizing services for images. The hook must return an array with the same
 * elements that are normally returned from the function.
 *
 * @since 2.5.0
 *
 * @param int $id   Attachment ID for image.
 * @param string|int[] $size Optional. Image size. Accepts any registered image size name, or an array
 *                           of width and height values in pixels (in that order). Default 'medium'.
 * @return array|false {
 *     Array of image data, or boolean false if no image is available.
 *
 * @type string $0 Image source URL.
 * @type int    $1 Image width in pixels.
 * @type int    $2 Image height in pixels.
 * @type bool   $3 Whether the image is a resized image.
 * }
 */
    public function imageDownsize(int $id, string|array $size = 'medium'): array|false;
}
