<?php

namespace WpService\Contracts;

interface WpRestoreImage
{
    /**
 * Restores the metadata for a given attachment.
 *
 * @since 2.9.0
 *
 * @param int $postId Attachment post ID.
 * @return \stdClass Image restoration message object.
 */
    public function wpRestoreImage(int $postId): \stdClass;
}
