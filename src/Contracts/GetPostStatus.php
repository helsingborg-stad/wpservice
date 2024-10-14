<?php

namespace WpService\Contracts;

interface GetPostStatus
{
/**
 * Retrieves the post status based on the post ID.
 *
 * If the post ID is of an attachment, then the parent post status will be given
 * instead.
 *
 * @since 2.0.0
 *
 * @param int|\WP_Post $post Optional. Post ID or post object. Defaults to global $post.
 * @return string|false Post status on success, false on failure.
 */
    public function getPostStatus(int|\WP_Post $post = null): string|false;
}
