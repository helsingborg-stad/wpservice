<?php

namespace WpService\Contracts;

interface WpGetRecentPosts
{
    /**
     * Retrieves a number of recent posts.
     *
     * @since 1.0.0
     *
     * @see get_posts()
     *
     * @param array $args   Optional. Arguments to retrieve posts. Default empty array.
     * @param string $output Optional. The required return type. One of OBJECT or ARRAY_A, which
     *                       correspond to a WP_Post object or an associative array, respectively.
     *                       Default ARRAY_A.
     * @return array|false Array of recent posts, where the type of each element is determined
     *                     by the `$output` parameter. Empty array on failure.
     */
    public function wpGetRecentPosts(array $args = [], string $output = ARRAY_A): array|false;
}
