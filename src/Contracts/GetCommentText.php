<?php

namespace WpService\Contracts;

interface GetCommentText
{
    /**
 * Retrieves the text of the current comment.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 * @since 5.4.0 Added 'In reply to %s.' prefix to child comments in comments feed.
 *
 * @see Walker_Comment::comment()
 *
 * @param int|\WP_Comment $commentId Optional. WP_Comment or ID of the comment for which to get the text.
 *                                   Default current comment.
 * @param array $args       Optional. An array of arguments. Default empty array.
 * @return string The comment content.
 */
    public function getCommentText(int|\WP_Comment $commentId, array $args): string;
}
