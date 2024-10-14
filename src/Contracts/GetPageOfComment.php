<?php

namespace WpService\Contracts;

interface GetPageOfComment
{
/**
 * Calculates what page number a comment will appear on for comment paging.
 *
 * @since 2.7.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $commentId Comment ID.
 * @param array $args {
 *     Array of optional arguments.
 *
 * @type string     $type      Limit paginated comments to those matching a given type.
 *                                 Accepts 'comment', 'trackback', 'pingback', 'pings'
 *                                 (trackbacks and pingbacks), or 'all'. Default 'all'.
 * @type int        $per_page  Per-page count to use when calculating pagination.
 *                                 Defaults to the value of the 'comments_per_page' option.
 * @type int|string $max_depth If greater than 1, comment page will be determined
 *                                 for the top-level parent `$comment_id`.
 *                                 Defaults to the value of the 'thread_comments_depth' option.
 * }
 * @return int|null Comment page number or null on error.
 */
    public function getPageOfComment(int $commentId, array $args = []): int|null;
}
