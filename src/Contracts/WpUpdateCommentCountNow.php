<?php

namespace WpService\Contracts;

interface WpUpdateCommentCountNow
{
    /**
     * Updates the comment count for the post.
     *
     * @since 2.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $postId Post ID
     * @return bool True on success, false if the post does not exist.
     */
    public function wpUpdateCommentCountNow(int $postId): bool;
}
