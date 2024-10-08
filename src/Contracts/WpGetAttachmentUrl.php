<?php

namespace WpService\Contracts;

interface WpGetAttachmentUrl
{
    /**
 * Retrieves the URL for an attachment.
 *
 * @since 2.1.0
 *
 * @global string $pagenow The filename of the current screen.
 *
 * @param int $attachmentId Optional. Attachment post ID. Defaults to global $post.
 * @return string|false Attachment URL, otherwise false.
 */
    public function wpGetAttachmentUrl(int $attachmentId = 0): string|false;
}
