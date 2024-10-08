<?php

namespace WpService\Contracts;

interface PostCommentsFeedLink
{
    /**
     * Displays the comment feed link for a post.
     *
     * Prints out the comment feed link for a post. Link text is placed in the
     * anchor. If no link text is specified, default text is used. If no post ID is
     * specified, the current post is used.
     *
     * @since 2.5.0
     *
     * @param string $linkText Optional. Descriptive link text. Default 'Comments Feed'.
     * @param int $postId   Optional. Post ID. Default is the ID of the global `$post`.
     * @param string $feed      Optional. Feed type. Possible values include 'rss2', 'atom'.
     *                          Default is the value of get_default_feed().
     */
    public function postCommentsFeedLink(string $linkText = '', int|string $postId = '', string $feed = ''): void;
}
