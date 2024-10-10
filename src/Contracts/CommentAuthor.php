<?php

namespace WpService\Contracts;

interface CommentAuthor
{
    /**
     * Displays the author of the current comment.
     *
     * @since 0.71
     * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
     *
     * @param int|\WP_Comment $commentId Optional. WP_Comment or the ID of the comment for which to print the author.
     *                                   Default current comment.
     */
    public function commentAuthor(int|\WP_Comment $commentId = 0): void;
}
