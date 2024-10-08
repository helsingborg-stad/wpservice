<?php

namespace WpService\Contracts;

interface WpGetAttachmentImageUrl
{
    /**
     * Gets the URL of an image attachment.
     *
     * @since 4.4.0
     *
     * @param int $attachmentId Image attachment ID.
     * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array of
     *                                    width and height values in pixels (in that order). Default 'thumbnail'.
     * @param bool $icon          Optional. Whether the image should be treated as an icon. Default false.
     * @return string|false Attachment URL or false if no image is available. If `$size` does not match
     *                      any registered image size, the original image URL will be returned.
     */
    public function wpGetAttachmentImageUrl(int $attachmentId, string|array $size = 'thumbnail', bool $icon = false): string|false;
}
