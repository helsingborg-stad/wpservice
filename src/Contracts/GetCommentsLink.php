<?php

namespace WpService\Contracts;

interface GetCommentsLink
{
    /**
 * Retrieves the link to the current post comments.
 *
 * @since 1.5.0
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @return string The link to the comments.
 */
    public function getCommentsLink(int|\WP_Post $post = 0): string;
}
