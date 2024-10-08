<?php

namespace WpService\Contracts;

interface SetPostThumbnail
{
    /**
 * Sets the post thumbnail (featured image) for the given post.
 *
 * @since 3.1.0
 *
 * @param int|\WP_Post $post         Post ID or post object where thumbnail should be attached.
 * @param int $thumbnailId Thumbnail to attach.
 * @return int|bool True on success, false on failure.
 */
    public function setPostThumbnail(int|\WP_Post $post, int $thumbnailId): int|bool;
}
