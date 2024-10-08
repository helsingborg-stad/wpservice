<?php

namespace WpService\Contracts;

interface WpGetAttachmentThumbUrl
{
    /**
 * Retrieves URL for an attachment thumbnail.
 *
 * @since 2.1.0
 * @since 6.1.0 Changed to use wp_get_attachment_image_url().
 *
 * @param int $postId Optional. Attachment ID. Default is the ID of the global `$post`.
 * @return string|false Thumbnail URL on success, false on failure.
 */
    public function wpGetAttachmentThumbUrl(int $postId): string|false;
}
