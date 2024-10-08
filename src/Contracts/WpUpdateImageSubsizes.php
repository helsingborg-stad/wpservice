<?php

namespace WpService\Contracts;

interface WpUpdateImageSubsizes
{
    /**
 * If any of the currently registered image sub-sizes are missing,
 * create them and update the image meta data.
 *
 * @since 5.3.0
 *
 * @param int $attachmentId The image attachment post ID.
 * @return array|\WP_Error The updated image meta data array or WP_Error object
 *                        if both the image meta and the attached file are missing.
 */
    public function wpUpdateImageSubsizes(int $attachmentId): array|\WP_Error;
}
