<?php

namespace WpService\Contracts;

use WP_Post;

interface GetPostType
{
    /**
     * Retrieves the post type of the current post or of a given post.
     *
     * @param int|WP_Post|null $post Optional. Post ID or post object. Default is global $post.
     * @return string|false          Post type on success, false on failure.
     */
    public function getPostType(int|WP_Post|null $post = null): string|false;
}
