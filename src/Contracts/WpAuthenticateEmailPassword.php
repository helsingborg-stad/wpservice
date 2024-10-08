<?php

namespace WpService\Contracts;

interface WpAuthenticateEmailPassword
{
    /**
 * Authenticates a user using the email and password.
 *
 * @since 4.5.0
 *
 * @param \WP_User|\WP_Error|null $user     WP_User or WP_Error object if a previous
 *                                        callback failed authentication.
 * @param string $email    Email address for authentication.
 * @param string $password Password for authentication.
 * @return \WP_User|\WP_Error WP_User on success, WP_Error on failure.
 */
    public function wpAuthenticateEmailPassword(\WP_User|\WP_Error|null $user, string $email, string $password): \WP_User|\WP_Error;
}
