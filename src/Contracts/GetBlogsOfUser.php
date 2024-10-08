<?php

namespace WpService\Contracts;

interface GetBlogsOfUser
{
    /**
 * Gets the sites a user belongs to.
 *
 * @since 3.0.0
 * @since 4.7.0 Converted to use `get_sites()`.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $userId User ID
 * @param bool $all     Whether to retrieve all sites, or only sites that are not
 *                      marked as deleted, archived, or spam.
 * @return object[] A list of the user's sites. An empty array if the user doesn't exist
 *                  or belongs to no sites.
 */
    public function getBlogsOfUser(int $userId, bool $all): array;
}
