<?php

namespace WpService\Contracts;

interface DeletePostThumbnail
{
    /**
     * Removes the thumbnail (featured image) from the given post.
     *
     * @since 3.3.0
     *
     * @param int|\WP_Post $post Post ID or post object from which the thumbnail should be removed.
     * @return bool True on success, false on failure.
     */
    public function deletePostThumbnail(int|\WP_Post $post): bool;
}
