<?php

namespace WpService\Contracts;

interface WpCalculateImageSizes
{
    /**
     * Creates a 'sizes' attribute value for an image.
     *
     * @since 4.4.0
     *
     * @param string|int[] $size          Image size. Accepts any registered image size name, or an array of
     *                                    width and height values in pixels (in that order).
     * @param string|null $imageSrc     Optional. The URL to the image file. Default null.
     * @param array|null $imageMeta    Optional. The image meta data as returned by 'wp_get_attachment_metadata()'.
     *                                    Default null.
     * @param int $attachmentId Optional. Image attachment ID. Either `$image_meta` or `$attachment_id`
     *                                    is needed when using the image size name as argument for `$size`. Default 0.
     * @return string|false A valid source size value for use in a 'sizes' attribute or false.
     */
    public function wpCalculateImageSizes(string|array $size, string|null $imageSrc = null, array|null $imageMeta = null, int $attachmentId = 0): string|false;
}
