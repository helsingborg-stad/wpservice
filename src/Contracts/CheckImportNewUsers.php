<?php

namespace WpService\Contracts;

interface CheckImportNewUsers
{
/**
 * Checks if the current user has permissions to import new users.
 *
 * @since 3.0.0
 *
 * @param string $permission A permission to be checked. Currently not used.
 * @return bool True if the user has proper permissions, false if they do not.
 */
    public function checkImportNewUsers(string $permission): bool;
}
