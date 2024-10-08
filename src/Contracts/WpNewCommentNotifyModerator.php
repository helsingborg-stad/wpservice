<?php

namespace WpService\Contracts;

interface WpNewCommentNotifyModerator
{
    /**
 * Sends a comment moderation notification to the comment moderator.
 *
 * @since 4.4.0
 *
 * @param int $commentId ID of the comment.
 * @return bool True on success, false on failure.
 */
    public function wpNewCommentNotifyModerator(int $commentId): bool;
}
