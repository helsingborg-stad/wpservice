<?php

namespace WpService\Contracts;

interface WpGetPostParentId
{
    /**
 * Returns the ID of the post's parent.
 *
 * @since 3.1.0
 * @since 5.9.0 The `$post` parameter was made optional.
 *
 * @param int|\WP_Post|null $post Optional. Post ID or post object. Defaults to global $post.
 * @return int|false Post parent ID (which can be 0 if there is no parent),
 *                   or false if the post does not exist.
 */
    public function wpGetPostParentId(int|\WP_Post|null $post = null): int|false;
}
