<?php

namespace WpService\Contracts;

use WP_User;

interface GetUserdata
{
    /**
     * Retrieves user info by user ID.
     *
     * @param int $userId User ID
     * @return WP_User|false WP_User object on success, false on failure.
     */
    public function getUserdata(int $userId): WP_User|false;
}
