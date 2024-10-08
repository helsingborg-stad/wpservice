<?php

namespace WpService\Contracts;

interface UpdatePostCache
{
    /**
 * Updates posts in cache.
 *
 * @since 1.5.1
 *
 * @param WP_Post[] $posts Array of post objects (passed by reference).
 */
    public function updatePostCache(array $posts): void;
}
