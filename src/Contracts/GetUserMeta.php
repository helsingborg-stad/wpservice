<?php

namespace WpService\Contracts;

interface GetUserMeta
{
    /**
     * Retrieves user meta field for a user.
     *
     * @param int    $userId  User ID.
     * @param string $key     Optional. The meta key to retrieve. By default,
     *                        returns data for all keys.
     * @param bool   $single  Optional. Whether to return a single value.
     *                        This parameter has no effect if `$key` is not specified.
     *                        Default false.
     * @return mixed An array of values if `$single` is false.
     *               The value of meta data field if `$single` is true.
     *               False for an invalid `$user_id` (non-numeric, zero, or negative value).
     *               An empty string if a valid but non-existing user ID is passed.
     */
    public function getUserMeta(int $userId, string $key, bool $single = false): mixed;
}
