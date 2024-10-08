<?php

namespace WpService\Contracts;

interface QueryPosts
{
    /**
     * Sets up The Loop with query parameters.
     *
     * Note: This function will completely override the main query and isn't intended for use
     * by plugins or themes. Its overly-simplistic approach to modifying the main query can be
     * problematic and should be avoided wherever possible. In most cases, there are better,
     * more performant options for modifying the main query such as via the {@see 'pre_get_posts'}
     * action within WP_Query.
     *
     * This must not be used within the WordPress Loop.
     *
     * @since 1.5.0
     *
     * @global WP_Query $wp_query WordPress Query object.
     *
     * @param array|string $query Array or string of WP_Query arguments.
     * @return WP_Post[]|int[] Array of post objects or post IDs.
     */
    public function queryPosts(array|string $query): array;
}
