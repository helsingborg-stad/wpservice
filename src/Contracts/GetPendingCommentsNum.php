<?php

namespace WpService\Contracts;

interface GetPendingCommentsNum
{
    /**
 * Gets the number of pending comments on a post or posts.
 *
 * @since 2.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|int[] $postId Either a single Post ID or an array of Post IDs
 * @return int|int[] Either a single Posts pending comments as an int or an array of ints keyed on the Post IDs
 */
    public function getPendingCommentsNum(int|array $postId): int|array;
}
