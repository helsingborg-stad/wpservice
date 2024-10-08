<?php

namespace WpService\Contracts;

interface WpAttachmentIs
{
    /**
     * Verifies an attachment is of a given type.
     *
     * @since 4.2.0
     *
     * @param string $type Attachment type. Accepts `image`, `audio`, `video`, or a file extension.
     * @param int|\WP_Post $post Optional. Attachment ID or object. Default is global $post.
     * @return bool True if an accepted type or a matching file extension, false otherwise.
     */
    public function wpAttachmentIs(string $type, int|\WP_Post $post = null): bool;
}
