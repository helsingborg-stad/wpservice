<?php

namespace WpService\Contracts;

interface CacheUsers
{
    /**
     * Retrieves info for user lists to prevent multiple queries by get_userdata().
     *
     * @since 3.0.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int[] $userIds User ID numbers list
     */
    public function cacheUsers(array $userIds): void;
}
