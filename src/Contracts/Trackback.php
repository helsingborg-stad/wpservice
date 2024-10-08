<?php

namespace WpService\Contracts;

interface Trackback
{
    /**
 * Sends a Trackback.
 *
 * Updates database when sending trackback to prevent duplicates.
 *
 * @since 0.71
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $trackbackUrl URL to send trackbacks.
 * @param string $title         Title of post.
 * @param string $excerpt       Excerpt of post.
 * @param int $postId       Post ID.
 * @return int|false|void Database query from update.
 */
    public function trackback(string $trackbackUrl, string $title, string $excerpt, int $postId): mixed;
}
