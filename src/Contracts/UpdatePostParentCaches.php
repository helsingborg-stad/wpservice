<?php

namespace WpService\Contracts;

interface UpdatePostParentCaches
{
    /**
     * Updates parent post caches for a list of post objects.
     *
     * @since 6.1.0
     *
     * @param WP_Post[] $posts Array of post objects.
     */
    public function updatePostParentCaches(array $posts): void;
}
