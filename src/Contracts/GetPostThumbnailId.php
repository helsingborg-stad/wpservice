<?php

namespace WpService\Contracts;

interface GetPostThumbnailId
{
/**
 * Retrieves the post thumbnail ID.
 *
 * @since 2.9.0
 * @since 4.4.0 `$post` can be a post ID or WP_Post object.
 * @since 5.5.0 The return value for a non-existing post
 *              was changed to false instead of an empty string.
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
 * @return int|false Post thumbnail ID (which can be 0 if the thumbnail is not set),
 *                   or false if the post does not exist.
 */
    public function getPostThumbnailId(int|\WP_Post $post = null): int|false;
}
