<?php

namespace WpService\Contracts;

interface RefreshUserDetails
{
/**
 * Cleans the user cache for a specific user.
 *
 * @since 3.0.0
 *
 * @param int $id The user ID.
 * @return int|false The ID of the refreshed user or false if the user does not exist.
 */
    public function refreshUserDetails(int $id): int|false;
}
