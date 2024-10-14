<?php

namespace WpService\Contracts;

interface WpCalculateImageSrcset
{
/**
 * A helper function to calculate the image sources to include in a 'srcset' attribute.
 *
 * @since 4.4.0
 *
 * @param int[] $sizeArray    {
 *     An array of width and height values.
 *
 * @type int $0 The width in pixels.
 * @type int $1 The height in pixels.
 * }
 * @param string $imageSrc     The 'src' of the image.
 * @param array $imageMeta    The image meta data as returned by 'wp_get_attachment_metadata()'.
 * @param int $attachmentId Optional. The image attachment ID. Default 0.
 * @return string|false The 'srcset' attribute value. False on error or when only one source exists.
 */
    public function wpCalculateImageSrcset(array $sizeArray, string $imageSrc, array $imageMeta, int $attachmentId = 0): string|false;
}
