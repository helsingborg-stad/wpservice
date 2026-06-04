<?php

namespace WpService\Contracts;

interface WpIsHeicImageMimeType
{
/**
 * Checks if a mime type is for a HEIC/HEIF image.
 *
 * @since 6.7.0
 *
 * @param string $mimeType The mime type to check.
 * @return bool Whether the mime type is for a HEIC/HEIF image.
 */
    public function wpIsHeicImageMimeType(string $mimeType): bool;
}
