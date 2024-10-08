<?php

namespace WpService\Contracts;

interface DeleteCommentMeta
{
    /**
 * Removes metadata matching criteria from a comment.
 *
 * You can match based on the key, or key and value. Removing based on key and
 * value, will keep from removing duplicate metadata with the same key. It also
 * allows removing all metadata matching key, if needed.
 *
 * @since 2.9.0
 *
 * @link https://developer.wordpress.org/reference/functions/delete_comment_meta/
 *
 * @param int $commentId Comment ID.
 * @param string $metaKey   Metadata name.
 * @param mixed $metaValue Optional. Metadata value. If provided,
 *                           rows will only be removed that match the value.
 *                           Must be serializable if non-scalar. Default empty string.
 * @return bool True on success, false on failure.
 */
    public function deleteCommentMeta(int $commentId, string $metaKey, mixed $metaValue = ''): bool;
}
