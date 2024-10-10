<?php

namespace WpService\Contracts;

interface WpGetAttachmentMetadata
{
    /**
     * Retrieves attachment metadata for attachment ID.
     *
     * @since 2.1.0
     * @since 6.0.0 The `$filesize` value was added to the returned array.
     *
     * @param int $attachmentId Attachment post ID. Defaults to global $post.
     * @param bool $unfiltered    Optional. If true, filters are not run. Default false.
     * @return array|false {
     *     Attachment metadata. False on failure.
     *
     * @type int    $width      The width of the attachment.
     * @type int    $height     The height of the attachment.
     * @type string $file       The file path relative to `wp-content/uploads`.
     * @type array  $sizes      Keys are size slugs, each value is an array containing
     *                              'file', 'width', 'height', and 'mime-type'.
     * @type array  $image_meta Image metadata.
     * @type int    $filesize   File size of the attachment.
     * }
     */
    public function wpGetAttachmentMetadata(int $attachmentId, bool $unfiltered = false): array|false;
}
