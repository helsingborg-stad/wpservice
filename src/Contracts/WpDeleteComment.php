<?php

namespace WpService\Contracts;

interface WpDeleteComment
{
    /**
 * Trashes or deletes a comment.
 *
 * The comment is moved to Trash instead of permanently deleted unless Trash is
 * disabled, item is already in the Trash, or $force_delete is true.
 *
 * The post comment count will be updated if the comment was approved and has a
 * post ID available.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|\WP_Comment $commentId   Comment ID or WP_Comment object.
 * @param bool $forceDelete Whether to bypass Trash and force deletion. Default false.
 * @return bool True on success, false on failure.
 */
    public function wpDeleteComment(int|\WP_Comment $commentId, bool $forceDelete): bool;
}
