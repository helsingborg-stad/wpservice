<?php

namespace WpService\Contracts;

interface GetCommentsNumber
{
    /**
 * Retrieves the amount of comments a post has.
 *
 * @since 1.5.0
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is the global `$post`.
 * @return string|int If the post exists, a numeric string representing the number of comments
 *                    the post has, otherwise 0.
 */
    public function getCommentsNumber(int|\WP_Post $post): string|int;
}
