<?php

namespace WpService\Contracts;

interface GetCommentAuthorEmail
{
/**
 * Retrieves the email of the author of the current comment.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @param int|\WP_Comment $commentId Optional. WP_Comment or the ID of the comment for which to get the author's email.
 *                                   Default current comment.
 * @return string The current comment author's email
 */
    public function getCommentAuthorEmail(int|\WP_Comment $commentId = 0): string;
}
