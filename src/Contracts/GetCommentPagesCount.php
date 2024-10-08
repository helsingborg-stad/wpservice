<?php

namespace WpService\Contracts;

interface GetCommentPagesCount
{
    /**
     * Calculates the total number of comment pages.
     *
     * @since 2.7.0
     *
     * @uses Walker_Comment
     *
     * @global WP_Query $wp_query WordPress Query object.
     *
     * @param WP_Comment[] $comments Optional. Array of WP_Comment objects. Defaults to `$wp_query->comments`.
     * @param int $perPage Optional. Comments per page. Defaults to the value of `comments_per_page`
     *                               query var, option of the same name, or 1 (in that order).
     * @param bool $threaded Optional. Control over flat or threaded comments. Defaults to the value
     *                               of `thread_comments` option.
     * @return int Number of comment pages.
     */
    public function getCommentPagesCount(array $comments = null, int $perPage = null, bool $threaded = null): int;
}
