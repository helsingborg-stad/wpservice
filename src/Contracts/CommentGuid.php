<?php

namespace WpService\Contracts;

interface CommentGuid
{
    /**
 * Displays the feed GUID for the current comment.
 *
 * @since 2.5.0
 *
 * @param int|\WP_Comment $commentId Optional comment object or ID. Defaults to global comment object.
 */
    public function commentGuid(int|\WP_Comment $commentId = null): void;
}
