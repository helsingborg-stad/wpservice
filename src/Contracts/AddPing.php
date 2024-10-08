<?php

namespace WpService\Contracts;

interface AddPing
{
    /**
 * Adds a URL to those already pinged.
 *
 * @since 1.5.0
 * @since 4.7.0 `$post` can be a WP_Post object.
 * @since 4.7.0 `$uri` can be an array of URIs.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|\WP_Post $post Post ID or post object.
 * @param string|array $uri  Ping URI or array of URIs.
 * @return int|false How many rows were updated.
 */
    public function addPing(int|\WP_Post $post, string|array $uri): int|false;
}
