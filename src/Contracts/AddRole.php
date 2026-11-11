<?php

namespace WpService\Contracts;

interface AddRole
{
/**
 * Adds a role, if it does not exist.
 *
 * The list of capabilities can be passed either as a numerically indexed array of capability names, or an
 * associative array of boolean values keyed by the capability name. To explicitly deny the role a capability, set
 * the value for that capability to false.
 *
 * Examples:
 *
 *     // Add a role that can edit posts.
 *     add_role( 'custom_role', 'Custom Role', array(
 *         'read',
 *         'edit_posts',
 *     ) );
 *
 * Or, using an associative array:
 *
 *     // Add a role that can edit posts but explicitly cannot not delete them.
 *     add_role( 'custom_role', 'Custom Role', array(
 *         'read' => true,
 *         'edit_posts' => true,
 *         'delete_posts' => false,
 *     ) );
 *
 * @since 2.0.0
 * @since 6.9.0 Support was added for a numerically indexed array of strings for the capabilities array.
 *
 * @param string $role         Role name.
 * @param string $displayName Display name for role.
 * @param array<string,bool>|array<int,string> $capabilities Capabilities to be added to the role.
 *                                                           Default empty array.
 * @return \WP_Role|void WP_Role object, if the role is added.
 */
    public function addRole(string $role, string $displayName, $capabilities = []): mixed;
}
