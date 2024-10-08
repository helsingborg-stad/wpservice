<?php

namespace WpService\Contracts;

interface DeleteUserOption
{
    /**
 * Deletes user option with global blog capability.
 *
 * User options are just like user metadata except that they have support for
 * global blog options. If the 'is_global' parameter is false, which it is by default,
 * it will prepend the WordPress table prefix to the option name.
 *
 * @since 3.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $userId     User ID
 * @param string $optionName User option name.
 * @param bool $isGlobal   Optional. Whether option name is global or blog specific.
 *                            Default false (blog specific).
 * @return bool True on success, false on failure.
 */
    public function deleteUserOption(int $userId, string $optionName, bool $isGlobal = false): bool;
}
