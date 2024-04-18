<?php

namespace WpService\Contracts;

interface GetPostMeta
{
    /**
     * Get post meta.
     *
     * @param mixed $postId The post ID.
     * @param string $key The meta key.
     * @param bool $single Whether to return a single value or an array of values.
     * @return mixed The post meta value.
     */
    public function getPostMeta($postId, $key = '', $single = false): mixed;
}
