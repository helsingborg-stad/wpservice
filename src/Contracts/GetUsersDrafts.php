<?php

namespace WpService\Contracts;

interface GetUsersDrafts
{
/**
 * Retrieve the user's drafts.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $userId User ID.
 * @return array
 */
    public function getUsersDrafts(int $userId): array;
}
