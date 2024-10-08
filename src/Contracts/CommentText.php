<?php

namespace WpService\Contracts;

interface CommentText
{
    /**
 * Displays the text of the current comment.
 *
 * @since 0.71
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @see Walker_Comment::comment()
 *
 * @param int|\WP_Comment $commentId Optional. WP_Comment or ID of the comment for which to print the text.
 *                                   Default current comment.
 * @param array $args       Optional. An array of arguments. Default empty array.
 */
    public function commentText(int|\WP_Comment $commentId = 0, array $args = []): void;
}
