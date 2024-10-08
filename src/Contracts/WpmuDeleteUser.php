<?php

namespace WpService\Contracts;

interface WpmuDeleteUser
{
    /**
 * Deletes a user and all of their posts from the network.
 *
 * This function:
 *
 * - Deletes all posts (of all post types) authored by the user on all sites on the network
 * - Deletes all links owned by the user on all sites on the network
 * - Removes the user from all sites on the network
 * - Deletes the user from the database
 *
 * @since 3.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $id The user ID.
 * @return bool True if the user was deleted, false otherwise.
 */
    public function wpmuDeleteUser(int $id): bool;
}
