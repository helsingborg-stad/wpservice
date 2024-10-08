<?php

namespace WpService\Contracts;

interface ImageGetIntermediateSize
{
    /**
     * Retrieves the image's intermediate size (resized) path, width, and height.
     *
     * The $size parameter can be an array with the width and height respectively.
     * If the size matches the 'sizes' metadata array for width and height, then it
     * will be used. If there is no direct match, then the nearest image size larger
     * than the specified size will be used. If nothing is found, then the function
     * will break out and return false.
     *
     * The metadata 'sizes' is used for compatible sizes that can be used for the
     * parameter $size value.
     *
     * The url path will be given, when the $size parameter is a string.
     *
     * If you are passing an array for the $size, you should consider using
     * add_image_size() so that a cropped version is generated. It's much more
     * efficient than having to find the closest-sized image and then having the
     * browser scale down the image.
     *
     * @since 2.5.0
     *
     * @param int $postId Attachment ID.
     * @param string|int[] $size    Optional. Image size. Accepts any registered image size name, or an array
     *                              of width and height values in pixels (in that order). Default 'thumbnail'.
     * @return array|false {
     *     Array of file relative path, width, and height on success. Additionally includes absolute
     *     path and URL if registered size is passed to `$size` parameter. False on failure.
     *
     * @type string $file   Filename of image.
     * @type int    $width  Width of image in pixels.
     * @type int    $height Height of image in pixels.
     * @type string $path   Path of image relative to uploads directory.
     * @type string $url    URL of image.
     * }
     */
    public function imageGetIntermediateSize(int $postId, string|array $size = 'thumbnail'): array|false;
}
