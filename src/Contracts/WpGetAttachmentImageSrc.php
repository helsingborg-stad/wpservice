<?php

namespace WpService\Contracts;

interface WpGetAttachmentImageSrc
{
    /**
 * Retrieves an image to represent an attachment.
 *
 * @since 2.5.0
 *
 * @param int $attachmentId Image attachment ID.
 * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array of
 *                                    width and height values in pixels (in that order). Default 'thumbnail'.
 * @param bool $icon          Optional. Whether the image should fall back to a mime type icon. Default false.
 * @return array|false {
 *     Array of image data, or boolean false if no image is available.
 *
 *     @type string $0 Image source URL.
 *     @type int    $1 Image width in pixels.
 *     @type int    $2 Image height in pixels.
 *     @type bool   $3 Whether the image is a resized image.
 * }
 */
    public function wpGetAttachmentImageSrc(int $attachmentId, string|array $size = 'thumbnail', bool $icon = false): array|false;
}
