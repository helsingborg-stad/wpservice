<?php

namespace WpService\Contracts;

interface WpCheckCommentData
{
/**
 * Checks whether comment data passes internal checks or has disallowed content.
 *
 * @since 6.7.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $commentData Array of arguments for inserting a comment.
 * @return int|string|\WP_Error The approval status on success (0|1|'spam'|'trash'),
 *                             WP_Error otherwise.
 */
    public function wpCheckCommentData(array $commentData): int|string|\WP_Error;
}
