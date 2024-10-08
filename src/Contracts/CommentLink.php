<?php

namespace WpService\Contracts;

interface CommentLink
{
    /**
     * Displays the link to the comments.
     *
     * @since 1.5.0
     * @since 4.4.0 Introduced the `$comment` argument.
     *
     * @param int|\WP_Comment $comment Optional. Comment object or ID. Defaults to global comment object.
     */
    public function commentLink(int|\WP_Comment $comment = null): void;
}
