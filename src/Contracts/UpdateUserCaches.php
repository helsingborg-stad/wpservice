<?php

namespace WpService\Contracts;

interface UpdateUserCaches
{
    /**
 * Updates all user caches.
 *
 * @since 3.0.0
 *
 * @param object|WP_User $user User object or database row to be cached
 * @return void|false Void on success, false on failure.
 */
    public function updateUserCaches(object $user): false;
}
