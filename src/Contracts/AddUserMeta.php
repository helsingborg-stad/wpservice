<?php

namespace WpService\Contracts;

interface AddUserMeta
{
    /**
 * Adds meta data to a user.
 *
 * @since 3.0.0
 *
 * @param int $userId    User ID.
 * @param string $metaKey   Metadata name.
 * @param mixed $metaValue Metadata value. Must be serializable if non-scalar.
 * @param bool $unique     Optional. Whether the same key should not be added.
 *                           Default false.
 * @return int|false Meta ID on success, false on failure.
 */
    public function addUserMeta(int $userId, string $metaKey, mixed $metaValue, bool $unique = false): int|false;
}
