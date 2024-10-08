<?php

namespace WpService\Contracts;

interface WpSetAllUserSettings
{
    /**
 * Private. Sets all user interface settings.
 *
 * @since 2.8.0
 * @access private
 *
 * @global array $_updated_user_settings
 *
 * @param array $userSettings User settings.
 * @return bool|null True if set successfully, false if the current user could not be found.
 *                   Null if the current user is not a member of the site.
 */
    public function wpSetAllUserSettings(array $userSettings): bool|null;
}
