<?php

namespace WpService\Contracts;

interface WpStreamImage
{
/**
 * Streams image in WP_Image_Editor to browser.
 *
 * @since 2.9.0
 *
 * @param \WP_Image_Editor $image         The image editor instance.
 * @param string $mimeType     The mime type of the image.
 * @param int $attachmentId The image's attachment post ID.
 * @return bool True on success, false on failure.
 */
    public function wpStreamImage(\WP_Image_Editor $image, string $mimeType, int $attachmentId): bool;
}
