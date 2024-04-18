<?php

namespace WpService\Contracts;

use WP_Post;

interface GetTheTitle
{
    /**
     * Get the title of a post.
     *
     * @param int|WP_Post $post The post ID or object.
     * @return string The post title.
     */
    public function getTheTitle(int|WP_Post $post = 0): string;
}
