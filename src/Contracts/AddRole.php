<?php

namespace WpService\Contracts;

interface AddRole
{
    /**
 * Adds a role, if it does not exist.
 *
 * @since 2.0.0
 *
 * @param string $role         Role name.
 * @param string $displayName Display name for role.
 * @param bool[] $capabilities List of capabilities keyed by the capability name,
 *                             e.g. array( 'edit_posts' => true, 'delete_posts' => false ).
 * @return \WP_Role|void WP_Role object, if the role is added.
 */
    public function addRole(string $role, string $displayName, array $capabilities): \WP_Role;
}
