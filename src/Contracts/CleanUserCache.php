<?php

namespace WpService\Contracts;

interface CleanUserCache
{
/**
 * Cleans all user caches.
 *
 * @since 3.0.0
 * @since 4.4.0 'clean_user_cache' action was added.
 * @since 6.2.0 User metadata caches are now cleared.
 *
 * @param \WP_User|int $user User object or ID to be cleaned from the cache
 */
    public function cleanUserCache(\WP_User|int $user): void;
}
