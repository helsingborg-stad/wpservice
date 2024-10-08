<?php

namespace WpService\Contracts;

interface WpGetImageMime
{
    /**
 * Returns the real mime type of an image file.
 *
 * This depends on exif_imagetype() or getimagesize() to determine real mime types.
 *
 * @since 4.7.1
 * @since 5.8.0 Added support for WebP images.
 * @since 6.5.0 Added support for AVIF images.
 *
 * @param string $file Full path to the file.
 * @return string|false The actual mime type or false if the type cannot be determined.
 */
    public function wpGetImageMime(string $file): string|false;
}
