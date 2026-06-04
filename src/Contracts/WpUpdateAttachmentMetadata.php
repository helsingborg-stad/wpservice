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
 * @return int|bool Whether the metadata was successfully updated.
 *                  True on success, the Meta ID if the key didn't exist.
 *                  False if $post is invalid, on failure, or if $data is the same as the existing metadata.
 */
    public function wpUpdateAttachmentMetadata(int $attachmentId, array $data): int|bool;
}
