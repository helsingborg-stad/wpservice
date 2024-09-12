<?php

namespace WpService\Contracts;

interface updateAttachmentMetadata
{
    /**
     * Updates metadata for an attachment.
     *
     * @param int   $attachmentId The attachment ID.
     * @param array $data         The metadata to update.
     *
     * @return int|false The meta id updated, or false if post could not be found or invalid
     */
    public function updateAttachmentMetadata(
        int $attachmentId,
        array $data
    ): int|false;
}
