<?php

namespace WpService\Contracts;

interface GetApprovedComments
{
    /**
 * Retrieves the approved comments for a post.
 *
 * @since 2.0.0
 * @since 4.1.0 Refactored to leverage WP_Comment_Query over a direct query.
 *
 * @param int $postId The ID of the post.
 * @param array $args    {
 *     Optional. See WP_Comment_Query::__construct() for information on accepted arguments.
 *
 *     @type int    $status  Comment status to limit results by. Defaults to approved comments.
 *     @type int    $post_id Limit results to those affiliated with a given post ID.
 *     @type string $order   How to order retrieved comments. Default 'ASC'.
 * }
 * @return WP_Comment[]|int[]|int The approved comments, or number of comments if `$count`
 *                                argument is true.
 */
    public function getApprovedComments(int $postId, array $args): array|int;
}
