<?php

namespace WpService\Contracts;

interface GetPostCustom
{
    /**
 * Retrieves post meta fields, based on post ID.
 *
 * The post meta fields are retrieved from the cache where possible,
 * so the function is optimized to be called more than once.
 *
 * @since 1.2.0
 *
 * @param int $postId Optional. Post ID. Default is the ID of the global `$post`.
 * @return mixed An array of values.
 *               False for an invalid `$post_id` (non-numeric, zero, or negative value).
 *               An empty string if a valid but non-existing post ID is passed.
 */
    public function getPostCustom(int $postId = 0): mixed;
}
