<?php

namespace WpService\Contracts;

interface UpdatePostAuthorCaches
{
    /**
 * Updates post author user caches for a list of post objects.
 *
 * @since 6.1.0
 *
 * @param WP_Post[] $posts Array of post objects.
 */
    public function updatePostAuthorCaches(array $posts): void;
}
