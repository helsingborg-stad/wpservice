<?php

namespace WpService\Contracts;

interface WpDeletePost
{
    /**
     * Trashes or deletes a post or page.
     *
     * When the post and page is permanently deleted, everything that is tied to
     * it is deleted also. This includes comments, post meta fields, and terms
     * associated with the post.
     *
     * The post or page is moved to Trash instead of permanently deleted unless
     * Trash is disabled, item is already in the Trash, or $force_delete is true.
     *
     * @since 1.0.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     * @see wp_delete_attachment()
     * @see wp_trash_post()
     *
     * @param int $postId      Optional. Post ID. Default 0.
     * @param bool $forceDelete Optional. Whether to bypass Trash and force deletion.
     *                           Default false.
     * @return \WP_Post|false|null Post data on success, false or null on failure.
     */
    public function wpDeletePost(int $postId = 0, bool $forceDelete = false): \WP_Post|false|null;
}
