<?php

namespace WpService\Contracts;

use WP_Post;

interface GetPostParent
{
    /**
     * Get the parent post of a given post.
     *
     * @param int|WP_Post|null $postId The ID or WP_Post object of the post.
     * @return WP_Post|null The parent post object, or null if no parent post exists.
     */
    public function getPostParent(int|WP_Post|null $postId): ?WP_Post;
}
