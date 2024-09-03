<?php

namespace WpService\Contracts;

interface UpdatePostMeta
{
    /**
     * Retrieves users based on the provided arguments.
     *
     * @param array $args The arguments to filter the users.
     * @return WP_User[] The array of users matching the provided arguments.
     */
    public function updatePostMeta(int $postId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): bool;
}
