<?php

namespace WpService\Contracts;

interface WpDeleteUser
{
    /**
 * Delete user and optionally reassign posts and links to another user.
 *
 * Note that on a Multisite installation the user only gets removed from the site
 * and does not get deleted from the database.
 *
 * If the `$reassign` parameter is not assigned to a user ID, then all posts will
 * be deleted of that user. The action {@see 'delete_user'} that is passed the user ID
 * being deleted will be run after the posts are either reassigned or deleted.
 * The user meta will also be deleted that are for that user ID.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $id       User ID.
 * @param int $reassign Optional. Reassign posts and links to new User ID.
 * @return bool True when finished.
 */
    public function wpDeleteUser(int $id, int $reassign = null): bool;
}
