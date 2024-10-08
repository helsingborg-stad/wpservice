<?php

namespace WpService\Contracts;

interface GetMostRecentPostOfUser
{
    /**
 * Gets a user's most recent post.
 *
 * Walks through each of a user's blogs to find the post with
 * the most recent post_date_gmt.
 *
 * @since MU (3.0.0)
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $userId User ID.
 * @return array Contains the blog_id, post_id, post_date_gmt, and post_gmt_ts.
 */
    public function getMostRecentPostOfUser(int $userId): array;
}
