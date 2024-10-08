<?php

namespace WpService\Contracts;

interface DoEnclose
{
    /**
     * Checks content for video and audio links to add as enclosures.
     *
     * Will not add enclosures that have already been added and will
     * remove enclosures that are no longer in the post. This is called as
     * pingbacks and trackbacks.
     *
     * @since 1.5.0
     * @since 5.3.0 The `$content` parameter was made optional, and the `$post` parameter was
     *              updated to accept a post ID or a WP_Post object.
     * @since 5.6.0 The `$content` parameter is no longer optional, but passing `null` to skip it
     *              is still supported.
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string|null $content Post content. If `null`, the `post_content` field from `$post` is used.
     * @param int|\WP_Post $post    Post ID or post object.
     * @return void|false Void on success, false if the post is not found.
     */
    public function doEnclose(string|null $content, int|\WP_Post $post): mixed;
}
