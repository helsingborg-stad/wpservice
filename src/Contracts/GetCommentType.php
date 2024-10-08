<?php

namespace WpService\Contracts;

interface GetCommentType
{
    /**
 * Retrieves the comment type of the current comment.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @param int|\WP_Comment $commentId Optional. WP_Comment or ID of the comment for which to get the type.
 *                                   Default current comment.
 * @return string The comment type.
 */
    public function getCommentType(int|\WP_Comment $commentId = 0): string;
}
