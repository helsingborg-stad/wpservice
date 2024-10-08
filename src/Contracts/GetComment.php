<?php

namespace WpService\Contracts;

interface GetComment
{
    /**
     * Retrieves comment data given a comment ID or comment object.
     *
     * If an object is passed then the comment data will be cached and then returned
     * after being passed through a filter. If the comment is empty, then the global
     * comment variable will be used, if it is set.
     *
     * @since 2.0.0
     *
     * @global WP_Comment $comment Global comment object.
     *
     * @param \WP_Comment|string|int $comment Comment to retrieve.
     * @param string $output  Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
     *                                       correspond to a WP_Comment object, an associative array, or a numeric array,
     *                                       respectively. Default OBJECT.
     * @return \WP_Comment|array|null Depends on $output value.
     */
    public function getComment(\WP_Comment|string|int $comment = null, string $output = OBJECT): \WP_Comment|array|null;
}
