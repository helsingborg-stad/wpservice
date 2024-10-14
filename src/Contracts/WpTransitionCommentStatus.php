<?php

namespace WpService\Contracts;

interface WpTransitionCommentStatus
{
/**
 * Calls hooks for when a comment status transition occurs.
 *
 * Calls hooks for comment status transitions. If the new comment status is not the same
 * as the previous comment status, then two hooks will be ran, the first is
 * {@see 'transition_comment_status'} with new status, old status, and comment data.
 * The next action called is {@see 'comment_$old_status_to_$new_status'}. It has
 * the comment data.
 *
 * The final action will run whether or not the comment statuses are the same.
 * The action is named {@see 'comment_$new_status_$comment->comment_type'}.
 *
 * @since 2.7.0
 *
 * @param string $newStatus New comment status.
 * @param string $oldStatus Previous comment status.
 * @param \WP_Comment $comment    Comment object.
 */
    public function wpTransitionCommentStatus(string $newStatus, string $oldStatus, \WP_Comment $comment): void;
}
