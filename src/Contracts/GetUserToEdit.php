<?php

namespace WpService\Contracts;

interface GetUserToEdit
{
/**
 * Retrieve user data and filter it.
 *
 * @since 2.0.5
 *
 * @param int $userId User ID.
 * @return \WP_User|false WP_User object on success, false on failure.
 */
    public function getUserToEdit(int $userId): \WP_User|false;
}
