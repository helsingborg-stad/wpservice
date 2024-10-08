<?php

namespace WpService\Contracts;

interface GetPasswordResetKey
{
    /**
 * Creates, stores, then returns a password reset key for user.
 *
 * @since 4.4.0
 *
 * @global PasswordHash $wp_hasher Portable PHP password hashing framework instance.
 *
 * @param \WP_User $user User to retrieve password reset key for.
 * @return string|\WP_Error Password reset key on success. WP_Error on error.
 */
    public function getPasswordResetKey(\WP_User $user): string|\WP_Error;
}
