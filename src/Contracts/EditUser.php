<?php

namespace WpService\Contracts;

interface EditUser
{
    /**
 * Edit user settings based on contents of $_POST
 *
 * Used on user-edit.php and profile.php to manage and process user options, passwords etc.
 *
 * @since 2.0.0
 *
 * @param int $userId Optional. User ID.
 * @return int|\WP_Error User ID of the updated user or WP_Error on failure.
 */
    public function editUser(int $userId): int|\WP_Error;
}
