<?php

namespace WpService\Contracts;

interface GetUser
{
/**
 * Retrieves user info by user ID.
 *
 * @since 6.7.0
 *
 * @param int $userId User ID.
 *
 * @return \WP_User|false WP_User object on success, false on failure.
 */
    public function getUser(int $userId): \WP_User|false;
}
