<?php

namespace WpService\Contracts;

interface SetUserSetting
{
    /**
 * Adds or updates user interface setting.
 *
 * Both `$name` and `$value` can contain only ASCII letters, numbers, hyphens, and underscores.
 *
 * This function has to be used before any output has started as it calls `setcookie()`.
 *
 * @since 2.8.0
 *
 * @param string $name  The name of the setting.
 * @param string $value The value for the setting.
 * @return bool|null True if set successfully, false otherwise.
 *                   Null if the current user is not a member of the site.
 */
    public function setUserSetting(string $name, string $value): bool|null;
}
