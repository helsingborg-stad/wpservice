<?php

namespace WpService\Contracts;

interface GetPostMeta
{
    /**
     * Retrieves a post meta field for the given post ID.
     *
     * @since 1.5.0
     *
     * @param int $postId Post ID.
     * @param string $key     Optional. The meta key to retrieve. By default,
     *                        returns data for all keys. Default empty.
     * @param bool $single  Optional. Whether to return a single value.
     *                        This parameter has no effect if `$key` is not specified.
     *                        Default false.
     * @return mixed An array of values if `$single` is false.
     *               The value of the meta field if `$single` is true.
     *               False for an invalid `$post_id` (non-numeric, zero, or negative value).
     *               An empty string if a valid but non-existing post ID is passed.
     */
    public function getPostMeta(int $postId, string $key = '', bool $single = false): mixed;
}
