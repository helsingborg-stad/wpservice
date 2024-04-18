<?php

namespace WpService\Contracts;

use WP_Role;

interface AddRole
{
    /**
     * Add a role.
     *
     * @param string $role The role name.
     * @param string $displayName The display name of the role.
     * @param array $capabilities The capabilities of the role.
     * @return WP_Role|null The added role object, or null on failure.
     */
    public function addRole(string $role, string $displayName, array $capabilities): ?WP_Role;
}
