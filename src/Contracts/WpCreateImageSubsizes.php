<?php

namespace WpService\Contracts;

interface WpCreateImageSubsizes
{
    /**
 * Creates image sub-sizes, adds the new data to the image meta `sizes` array, and updates the image metadata.
 *
 * Intended for use after an image is uploaded. Saves/updates the image metadata after each
 * sub-size is created. If there was an error, it is added to the returned image metadata array.
 *
 * @since 5.3.0
 *
 * @param string $file          Full path to the image file.
 * @param int $attachmentId Attachment ID to process.
 * @return array The image attachment meta data.
 */
    public function wpCreateImageSubsizes(string $file, int $attachmentId): array;
}
