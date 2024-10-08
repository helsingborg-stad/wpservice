<?php

namespace WpService\Contracts;

interface GetPostCustomKeys
{
    /**
 * Retrieves meta field names for a post.
 *
 * If there are no meta fields, then nothing (null) will be returned.
 *
 * @since 1.2.0
 *
 * @param int $postId Optional. Post ID. Default is the ID of the global `$post`.
 * @return array|void Array of the keys, if retrieved.
 */
    public function getPostCustomKeys(int $postId): array;
}
