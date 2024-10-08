<?php

namespace WpService\Contracts;

interface GetCommentMeta
{
    /**
     * Retrieves comment meta field for a comment.
     *
     * @since 2.9.0
     *
     * @link https://developer.wordpress.org/reference/functions/get_comment_meta/
     *
     * @param int $commentId Comment ID.
     * @param string $key        Optional. The meta key to retrieve. By default,
     *                           returns data for all keys. Default empty string.
     * @param bool $single     Optional. Whether to return a single value.
     *                           This parameter has no effect if `$key` is not specified.
     *                           Default false.
     * @return mixed An array of values if `$single` is false.
     *               The value of meta data field if `$single` is true.
     *               False for an invalid `$comment_id` (non-numeric, zero, or negative value).
     *               An empty string if a valid but non-existing comment ID is passed.
     */
    public function getCommentMeta(int $commentId, string $key = '', bool $single = false): mixed;
}
