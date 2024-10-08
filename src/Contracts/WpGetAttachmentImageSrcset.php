<?php

namespace WpService\Contracts;

interface WpGetAttachmentImageSrcset
{
    /**
 * Retrieves the value for an image attachment's 'srcset' attribute.
 *
 * @since 4.4.0
 *
 * @see wp_calculate_image_srcset()
 *
 * @param int $attachmentId Image attachment ID.
 * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array of
 *                                    width and height values in pixels (in that order). Default 'medium'.
 * @param array|null $imageMeta    Optional. The image meta data as returned by 'wp_get_attachment_metadata()'.
 *                                    Default null.
 * @return string|false A 'srcset' value string or false.
 */
    public function wpGetAttachmentImageSrcset(int $attachmentId, string|array $size, array|null $imageMeta): string|false;
}
