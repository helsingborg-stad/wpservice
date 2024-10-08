<?php

namespace WpService\Contracts;

interface WpIsPasswordResetAllowedForUser
{
    /**
 * Checks if password reset is allowed for a specific user.
 *
 * @since 6.3.0
 *
 * @param int|\WP_User $user The user to check.
 * @return bool|\WP_Error True if allowed, false or WP_Error otherwise.
 */
    public function wpIsPasswordResetAllowedForUser(int|\WP_User $user): bool|\WP_Error;
}
