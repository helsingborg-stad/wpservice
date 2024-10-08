<?php

namespace WpService\Contracts;

interface GetCommentAuthorUrl
{
    /**
 * Retrieves the URL of the author of the current comment, not linked.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @param int|\WP_Comment $commentId Optional. WP_Comment or the ID of the comment for which to get the author's URL.
 *                                   Default current comment.
 * @return string Comment author URL, if provided, an empty string otherwise.
 */
    public function getCommentAuthorUrl(int|\WP_Comment $commentId): string;
}
