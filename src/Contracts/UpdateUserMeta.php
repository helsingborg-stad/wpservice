<?php

namespace WpService\Contracts;

interface UpdateUserMeta
{
    /**
     * Updates user meta field based on user ID.
     *
     * Use the $prev_value parameter to differentiate between meta fields with the
     * same key and user ID.
     *
     * If the meta field for the user does not exist, it will be added.
     *
     * @since 3.0.0
     *
     * @link https://developer.wordpress.org/reference/functions/update_user_meta/
     *
     * @param int $userId    User ID.
     * @param string $metaKey   Metadata key.
     * @param mixed $metaValue Metadata value. Must be serializable if non-scalar.
     * @param mixed $prevValue Optional. Previous value to check before updating.
     *                           If specified, only update existing metadata entries with
     *                           this value. Otherwise, update all entries. Default empty.
     * @return int|bool Meta ID if the key didn't exist, true on successful update,
     *                  false on failure or if the value passed to the function
     *                  is the same as the one that is already in the database.
     */
    public function updateUserMeta(int $userId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool;
}
