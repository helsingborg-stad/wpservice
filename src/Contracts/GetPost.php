<?php

namespace WpService\Contracts;

use WP_Post;

interface GetPost
{
    /**
     * Get a post by ID.
     *
     * @param int|WP_Post|null $post The post ID or object.
     * @param string $output Optional. The output type. Default is OBJECT.
     * @param string $filter Optional. The filter type. Default is "raw".
     * @return WP_Post|array|null The post object or array, or null if not found.
     */
    public function getPost(
        int|WP_Post|null $post = null,
        string $output = OBJECT,
        string $filter = "raw"
    ): WP_Post|array|null;
}
