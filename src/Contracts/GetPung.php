<?php

namespace WpService\Contracts;

interface GetPung
{
    /**
 * Retrieves URLs already pinged for a post.
 *
 * @since 1.5.0
 *
 * @since 4.7.0 `$post` can be a WP_Post object.
 *
 * @param int|\WP_Post $post Post ID or object.
 * @return string[]|false Array of URLs already pinged for the given post, false if the post is not found.
 */
    public function getPung(int|\WP_Post $post): array|false;
}
