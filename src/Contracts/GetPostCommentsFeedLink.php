<?php

namespace WpService\Contracts;

interface GetPostCommentsFeedLink
{
    /**
     * Retrieves the permalink for the post comments feed.
     *
     * @since 2.2.0
     *
     * @param int $postId Optional. Post ID. Default is the ID of the global `$post`.
     * @param string $feed    Optional. Feed type. Possible values include 'rss2', 'atom'.
     *                        Default is the value of get_default_feed().
     * @return string The permalink for the comments feed for the given post on success, empty string on failure.
     */
    public function getPostCommentsFeedLink(int $postId, string $feed = ''): string;
}
