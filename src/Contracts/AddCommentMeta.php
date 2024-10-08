<?php

namespace WpService\Contracts;

interface AddCommentMeta
{
    /**
     * Adds meta data field to a comment.
     *
     * @since 2.9.0
     *
     * @link https://developer.wordpress.org/reference/functions/add_comment_meta/
     *
     * @param int $commentId Comment ID.
     * @param string $metaKey   Metadata name.
     * @param mixed $metaValue Metadata value. Must be serializable if non-scalar.
     * @param bool $unique     Optional. Whether the same key should not be added.
     *                           Default false.
     * @return int|false Meta ID on success, false on failure.
     */
    public function addCommentMeta(int $commentId, string $metaKey, mixed $metaValue, bool $unique = false): int|false;
}
