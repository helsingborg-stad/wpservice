<?php

namespace WpService\Contracts;

interface WpDeleteAttachmentFiles
{
    /**
     * Deletes all files that belong to the given attachment.
     *
     * @since 4.9.7
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $postId      Attachment ID.
     * @param array $meta         The attachment's meta data.
     * @param array $backupSizes The meta data for the attachment's backup images.
     * @param string $file         Absolute path to the attachment's file.
     * @return bool True on success, false on failure.
     */
    public function wpDeleteAttachmentFiles(int $postId, array $meta, array $backupSizes, string $file): bool;
}
