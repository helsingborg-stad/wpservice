<?php

namespace WpService\Contracts;

interface WpGenerateAttachmentMetadata
{
/**
 * Generates attachment meta data and create image sub-sizes for images.
 *
 * @since 2.1.0
 * @since 6.0.0 The `$filesize` value was added to the returned array.
 * @since 6.7.0 The 'image/heic' mime type is supported.
 *
 * @param int $attachmentId Attachment ID to process.
 * @param string $file          Filepath of the attached image.
 * @return array Metadata for attachment.
 */
    public function wpGenerateAttachmentMetadata(int $attachmentId, string $file): array;
}
