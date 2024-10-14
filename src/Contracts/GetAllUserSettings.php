<?php

namespace WpService\Contracts;

interface GetAllUserSettings
{
/**
 * Retrieves all user interface settings.
 *
 * @since 2.7.0
 *
 * @global array $_updated_user_settings
 *
 * @return array The last saved user settings or empty array.
 */
    public function getAllUserSettings(): array;
}
