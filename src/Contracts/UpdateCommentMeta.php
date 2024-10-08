<?php

namespace WpService\Contracts;

interface UpdateCommentMeta
{
    /**
 * Updates comment meta field based on comment ID.
 *
 * Use the $prev_value parameter to differentiate between meta fields with the
 * same key and comment ID.
 *
 * If the meta field for the comment does not exist, it will be added.
 *
 * @since 2.9.0
 *
 * @link https://developer.wordpress.org/reference/functions/update_comment_meta/
 *
 * @param int $commentId Comment ID.
 * @param string $metaKey   Metadata key.
 * @param mixed $metaValue Metadata value. Must be serializable if non-scalar.
 * @param mixed $prevValue Optional. Previous value to check before updating.
 *                           If specified, only update existing metadata entries with
 *                           this value. Otherwise, update all entries. Default empty string.
 * @return int|bool Meta ID if the key didn't exist, true on successful update,
 *                  false on failure or if the value passed to the function
 *                  is the same as the one that is already in the database.
 */
    public function updateCommentMeta(int $commentId, string $metaKey, mixed $metaValue, mixed $prevValue): int|bool;
}
