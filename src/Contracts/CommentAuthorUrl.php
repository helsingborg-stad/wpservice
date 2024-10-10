<?php

namespace WpService\Contracts;

interface CommentAuthorUrl
{
    /**
     * Displays the URL of the author of the current comment, not linked.
     *
     * @since 0.71
     * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
     *
     * @param int|\WP_Comment $commentId Optional. WP_Comment or the ID of the comment for which to print the author's URL.
     *                                   Default current comment.
     */
    public function commentAuthorUrl(int|\WP_Comment $commentId): void;
}
