<?php

namespace WpService\Contracts;

interface GetTheTitle
{
/**
 * Retrieves the post title.
 *
 * If the post is protected and the visitor is not an admin, then "Protected"
 * will be inserted before the post title. If the post is private, then
 * "Private" will be inserted before the post title.
 *
 * @since 0.71
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @return string
 */
    public function getTheTitle(int|\WP_Post $post = 0): string;
}
