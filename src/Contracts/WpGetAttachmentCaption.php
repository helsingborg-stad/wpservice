<?php

namespace WpService\Contracts;

interface WpGetAttachmentCaption
{
/**
 * Retrieves the caption for an attachment.
 *
 * @since 4.6.0
 *
 * @param int $postId Optional. Attachment ID. Default is the ID of the global `$post`.
 * @return string|false Attachment caption on success, false on failure.
 */
    public function wpGetAttachmentCaption(int $postId = 0): string|false;
}
