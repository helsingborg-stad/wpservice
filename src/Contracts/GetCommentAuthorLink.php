<?php

namespace WpService\Contracts;

interface GetCommentAuthorLink
{
    /**
     * Retrieves the HTML link to the URL of the author of the current comment.
     *
     * Both get_comment_author_url() and get_comment_author() rely on get_comment(),
     * which falls back to the global comment variable if the $comment_id argument is empty.
     *
     * @since 1.5.0
     * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
     *
     * @param int|\WP_Comment $commentId Optional. WP_Comment or the ID of the comment for which to get the author's link.
     *                                   Default current comment.
     * @return string The comment author name or HTML link for author's URL.
     */
    public function getCommentAuthorLink(int|\WP_Comment $commentId = 0): string;
}
