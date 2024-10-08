<?php

namespace WpService\Contracts;

interface WpImageFileMatchesImageMeta
{
    /**
 * Determines if the image meta data is for the image source file.
 *
 * The image meta data is retrieved by attachment post ID. In some cases the post IDs may change.
 * For example when the website is exported and imported at another website. Then the
 * attachment post IDs that are in post_content for the exported website may not match
 * the same attachments at the new website.
 *
 * @since 5.5.0
 *
 * @param string $imageLocation The full path or URI to the image file.
 * @param array $imageMeta     The attachment meta data as returned by 'wp_get_attachment_metadata()'.
 * @param int $attachmentId  Optional. The image attachment ID. Default 0.
 * @return bool Whether the image meta is for this image file.
 */
    public function wpImageFileMatchesImageMeta(string $imageLocation, array $imageMeta, int $attachmentId): bool;
}
