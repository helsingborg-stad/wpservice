<?php

namespace WpService\Contracts;

interface WpGetCommentStatus
{
/**
 * Retrieves the status of a comment by comment ID.
 *
 * @since 1.0.0
 *
 * @param int|\WP_Comment $commentId Comment ID or WP_Comment object
 * @return string|false Status might be 'trash', 'approved', 'unapproved', 'spam'. False on failure.
 */
    public function wpGetCommentStatus(int|\WP_Comment $commentId): string|false;
}
