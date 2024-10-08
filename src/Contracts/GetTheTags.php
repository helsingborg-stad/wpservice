<?php

namespace WpService\Contracts;

interface GetTheTags
{
    /**
 * Retrieves the tags for a post.
 *
 * @since 2.3.0
 *
 * @param int|\WP_Post $post Post ID or object.
 * @return WP_Term[]|false|WP_Error Array of WP_Term objects on success, false if there are no terms
 *                                  or the post does not exist, WP_Error on failure.
 */
    public function getTheTags(int|\WP_Post $post): array|false|\WP_Error;
}
