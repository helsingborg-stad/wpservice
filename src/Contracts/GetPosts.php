<?php

namespace WpService\Contracts;

interface GetPosts
{
    /**
     * Get posts based on the provided arguments.
     *
     * @param array $args The arguments for retrieving posts.
     * @return array The array of posts.
     */
    public function getPosts(array $args): array;
}
