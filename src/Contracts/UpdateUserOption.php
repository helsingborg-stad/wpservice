<?php

namespace WpService\Contracts;

interface UpdateUserOption
{
    /**
 * Updates user option with global blog capability.
 *
 * User options are just like user metadata except that they have support for
 * global blog options. If the 'is_global' parameter is false, which it is by default,
 * it will prepend the WordPress table prefix to the option name.
 *
 * Deletes the user option if $newvalue is empty.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $userId     User ID.
 * @param string $optionName User option name.
 * @param mixed $newvalue    User option value.
 * @param bool $isGlobal   Optional. Whether option name is global or blog specific.
 *                            Default false (blog specific).
 * @return int|bool User meta ID if the option didn't exist, true on successful update,
 *                  false on failure.
 */
    public function updateUserOption(int $userId, string $optionName, mixed $newvalue, bool $isGlobal = false): int|bool;
}
