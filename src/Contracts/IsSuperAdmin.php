<?php

namespace WpService\Contracts;

interface IsSuperAdmin
{
    /**
 * Determines whether user is a site admin.
 *
 * @since 3.0.0
 *
 * @param int|false $userId Optional. The ID of a user. Defaults to false, to check the current user.
 * @return bool Whether the user is a site admin.
 */
    public function isSuperAdmin(int|false $userId = false): bool;
}
