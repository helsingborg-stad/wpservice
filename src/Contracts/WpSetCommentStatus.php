<?php

namespace WpService\Contracts;

interface WpSetCommentStatus
{
/**
 * Sets the status of a comment.
 *
 * The {@see 'wp_set_comment_status'} action is called after the comment is handled.
 * If the comment status is not in the list, then false is returned.
 *
 * @since 1.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|\WP_Comment $commentId     Comment ID or WP_Comment object.
 * @param string $commentStatus New comment status, either 'hold', 'approve', 'spam', or 'trash'.
 * @param bool $wpError       Whether to return a WP_Error object if there is a failure. Default false.
 * @return bool|\WP_Error True on success, false or WP_Error on failure.
 */
    public function wpSetCommentStatus(int|\WP_Comment $commentId, string $commentStatus, bool $wpError = false): bool|\WP_Error;
}
