<?php

namespace WpService\Contracts;

interface WpSaveImage
{
    /**
 * Saves image to post, along with enqueued changes
 * in `$_REQUEST['history']`.
 *
 * @since 2.9.0
 *
 * @param int $postId Attachment post ID.
 * @return \stdClass
 */
    public function wpSaveImage(int $postId): \stdClass;
}
