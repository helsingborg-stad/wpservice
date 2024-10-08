<?php

namespace WpService\Contracts;

interface WpIsApplicationPasswordsAvailableForUser
{
    /**
 * Checks if Application Passwords is available for a specific user.
 *
 * By default all users can use Application Passwords. Use {@see 'wp_is_application_passwords_available_for_user'}
 * to restrict availability to certain users.
 *
 * @since 5.6.0
 *
 * @param int|\WP_User $user The user to check.
 * @return bool
 */
    public function wpIsApplicationPasswordsAvailableForUser(int|\WP_User $user): bool;
}
