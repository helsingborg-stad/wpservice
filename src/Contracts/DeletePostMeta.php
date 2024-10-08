<?php

namespace WpService\Contracts;

interface DeletePostMeta
{
    /**
 * Deletes a post meta field for the given post ID.
 *
 * You can match based on the key, or key and value. Removing based on key and
 * value, will keep from removing duplicate metadata with the same key. It also
 * allows removing all metadata matching the key, if needed.
 *
 * @since 1.5.0
 *
 * @param int $postId    Post ID.
 * @param string $metaKey   Metadata name.
 * @param mixed $metaValue Optional. Metadata value. If provided,
 *                           rows will only be removed that match the value.
 *                           Must be serializable if non-scalar. Default empty.
 * @return bool True on success, false on failure.
 */
    public function deletePostMeta(int $postId, string $metaKey, mixed $metaValue = ''): bool;
}
