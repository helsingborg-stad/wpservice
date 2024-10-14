<?php

namespace WpService\Contracts;

interface UpdatePostMeta
{
/**
 * Updates a post meta field based on the given post ID.
 *
 * Use the `$prev_value` parameter to differentiate between meta fields with the
 * same key and post ID.
 *
 * If the meta field for the post does not exist, it will be added and its ID returned.
 *
 * Can be used in place of add_post_meta().
 *
 * @since 1.5.0
 *
 * @param int $postId    Post ID.
 * @param string $metaKey   Metadata key.
 * @param mixed $metaValue Metadata value. Must be serializable if non-scalar.
 * @param mixed $prevValue Optional. Previous value to check before updating.
 *                           If specified, only update existing metadata entries with
 *                           this value. Otherwise, update all entries. Default empty.
 * @return int|bool Meta ID if the key didn't exist, true on successful update,
 *                  false on failure or if the value passed to the function
 *                  is the same as the one that is already in the database.
 */
    public function updatePostMeta(int $postId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool;
}
