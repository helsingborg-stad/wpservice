<?php

namespace WpService\Contracts;

interface WpPublishPost
{
    /**
 * Publishes a post by transitioning the post status.
 *
 * @since 2.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|\WP_Post $post Post ID or post object.
 */
    public function wpPublishPost(int|\WP_Post $post): void;
}
