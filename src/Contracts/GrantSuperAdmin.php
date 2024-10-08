<?php

namespace WpService\Contracts;

interface GrantSuperAdmin
{
    /**
 * Grants Super Admin privileges.
 *
 * @since 3.0.0
 *
 * @global array $super_admins
 *
 * @param int $userId ID of the user to be granted Super Admin privileges.
 * @return bool True on success, false on failure. This can fail when the user is
 *              already a super admin or when the `$super_admins` global is defined.
 */
    public function grantSuperAdmin(int $userId): bool;
}
