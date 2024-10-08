<?php

namespace WpService\Contracts;

interface CommentExcerpt
{
    /**
 * Displays the excerpt of the current comment.
 *
 * @since 1.2.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @param int|\WP_Comment $commentId Optional. WP_Comment or ID of the comment for which to print the excerpt.
 *                                   Default current comment.
 */
    public function commentExcerpt(int|\WP_Comment $commentId = 0): void;
}
