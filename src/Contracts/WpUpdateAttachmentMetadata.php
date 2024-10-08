<?php

namespace WpService\Contracts;

interface WpUpdateAttachmentMetadata
{
    /**
     * Updates metadata for an attachment.
     *
     * @since 2.1.0
     *
     * @param int $attachmentId Attachment post ID.
     * @param array $data          Attachment meta data.
     * @return int|false False if $post is invalid.
     */
    public function wpUpdateAttachmentMetadata(int $attachmentId, array $data): int|false;
}
