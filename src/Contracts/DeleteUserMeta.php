<?php

namespace WpService\Contracts;

interface DeleteUserMeta
{
    /**
 * Removes metadata matching criteria from a user.
 *
 * You can match based on the key, or key and value. Removing based on key and
 * value, will keep from removing duplicate metadata with the same key. It also
 * allows removing all metadata matching key, if needed.
 *
 * @since 3.0.0
 *
 * @link https://developer.wordpress.org/reference/functions/delete_user_meta/
 *
 * @param int $userId    User ID
 * @param string $metaKey   Metadata name.
 * @param mixed $metaValue Optional. Metadata value. If provided,
 *                           rows will only be removed that match the value.
 *                           Must be serializable if non-scalar. Default empty.
 * @return bool True on success, false on failure.
 */
    public function deleteUserMeta(int $userId, string $metaKey, mixed $metaValue = ''): bool;
}
