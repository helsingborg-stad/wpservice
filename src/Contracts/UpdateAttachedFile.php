<?php

namespace WpService\Contracts;

interface UpdateAttachedFile
{
    /**
     * Updates attachment file path based on attachment ID.
     *
     * Used to update the file path of the attachment, which uses post meta name
     * '_wp_attached_file' to store the path of the attachment.
     *
     * @since 2.1.0
     *
     * @param int $attachmentId Attachment ID.
     * @param string $file          File path for the attachment.
     * @return bool True on success, false on failure.
     */
    public function updateAttachedFile(int $attachmentId, string $file): bool;
}
