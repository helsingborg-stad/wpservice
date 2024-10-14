<?php

namespace WpService\Contracts;

interface WpImageAddSrcsetAndSizes
{
/**
 * Adds 'srcset' and 'sizes' attributes to an existing 'img' element.
 *
 * @since 4.4.0
 *
 * @see wp_calculate_image_srcset()
 * @see wp_calculate_image_sizes()
 *
 * @param string $image         An HTML 'img' element to be filtered.
 * @param array $imageMeta    The image meta data as returned by 'wp_get_attachment_metadata()'.
 * @param int $attachmentId Image attachment ID.
 * @return string Converted 'img' element with 'srcset' and 'sizes' attributes added.
 */
    public function wpImageAddSrcsetAndSizes(string $image, array $imageMeta, int $attachmentId): string;
}
