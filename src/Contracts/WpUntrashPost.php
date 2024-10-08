<?php

namespace WpService\Contracts;

interface WpUntrashPost
{
    /**
     * Restores a post from the Trash.
     *
     * @since 2.9.0
     * @since 5.6.0 An untrashed post is now returned to 'draft' status by default, except for
     *              attachments which are returned to their original 'inherit' status.
     *
     * @param int $postId Optional. Post ID. Default is the ID of the global `$post`.
     * @return \WP_Post|false|null Post data on success, false or null on failure.
     */
    public function wpUntrashPost(int $postId = 0): \WP_Post|false|null;
}
