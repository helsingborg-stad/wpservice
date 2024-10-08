<?php

namespace WpService\Contracts;

interface GetPostAncestors
{
    /**
 * Retrieves the IDs of the ancestors of a post.
 *
 * @since 2.5.0
 *
 * @param int|\WP_Post $post Post ID or post object.
 * @return int[] Array of ancestor IDs or empty array if there are none.
 */
    public function getPostAncestors(int|\WP_Post $post): array;
}
