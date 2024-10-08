<?php

namespace WpService\Contracts;

interface WpImageSrcGetDimensions
{
    /**
 * Determines an image's width and height dimensions based on the source file.
 *
 * @since 5.5.0
 *
 * @param string $imageSrc     The image source file.
 * @param array $imageMeta    The image meta data as returned by 'wp_get_attachment_metadata()'.
 * @param int $attachmentId Optional. The image attachment ID. Default 0.
 * @return array|false Array with first element being the width and second element being the height,
 *                     or false if dimensions cannot be determined.
 */
    public function wpImageSrcGetDimensions(string $imageSrc, array $imageMeta, int $attachmentId): array|false;
}
