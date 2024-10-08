<?php

namespace WpService\Contracts;

interface StreamPreviewImage
{
    /**
     * Streams image in post to browser, along with enqueued changes
     * in `$_REQUEST['history']`.
     *
     * @since 2.9.0
     *
     * @param int $postId Attachment post ID.
     * @return bool True on success, false on failure.
     */
    public function streamPreviewImage(int $postId): bool;
}
