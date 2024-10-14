<?php

namespace WpService\Contracts;

interface Pingback
{
/**
 * Pings back the links found in a post.
 *
 * @since 0.71
 * @since 4.7.0 `$post` can be a WP_Post object.
 *
 * @param string $content Post content to check for links. If empty will retrieve from post.
 * @param int|\WP_Post $post    Post ID or object.
 */
    public function pingback(string $content, int|\WP_Post $post): void;
}
