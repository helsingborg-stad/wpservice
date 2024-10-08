<?php

namespace WpService\Contracts;

interface WpNewCommentNotifyPostauthor
{
    /**
 * Sends a notification of a new comment to the post author.
 *
 * @since 4.4.0
 *
 * Uses the {@see 'notify_post_author'} filter to determine whether the post author
 * should be notified when a new comment is added, overriding site setting.
 *
 * @param int $commentId Comment ID.
 * @return bool True on success, false on failure.
 */
    public function wpNewCommentNotifyPostauthor(int $commentId): bool;
}
