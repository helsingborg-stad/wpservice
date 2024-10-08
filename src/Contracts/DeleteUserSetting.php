<?php

namespace WpService\Contracts;

interface DeleteUserSetting
{
    /**
     * Deletes user interface settings.
     *
     * Deleting settings would reset them to the defaults.
     *
     * This function has to be used before any output has started as it calls `setcookie()`.
     *
     * @since 2.7.0
     *
     * @param string $names The name or array of names of the setting to be deleted.
     * @return bool|null True if deleted successfully, false otherwise.
     *                   Null if the current user is not a member of the site.
     */
    public function deleteUserSetting(string $names): bool|null;
}
