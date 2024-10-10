<?php

namespace WpService\Contracts;

interface WpGetimagesize
{
    /**
     * Allows PHP's getimagesize() to be debuggable when necessary.
     *
     * @since 5.7.0
     * @since 5.8.0 Added support for WebP images.
     * @since 6.5.0 Added support for AVIF images.
     *
     * @param string $filename   The file path.
     * @param array $imageInfo Optional. Extended image information (passed by reference).
     * @return array|false Array of image information or false on failure.
     */
    public function wpGetimagesize(string $filename, array &$imageInfo = null): array|false;
}
