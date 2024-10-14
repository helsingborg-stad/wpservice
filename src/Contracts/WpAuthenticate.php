<?php

namespace WpService\Contracts;

interface WpAuthenticate
{
/**
 * Authenticates a user, confirming the login credentials are valid.
 *
 * @since 2.5.0
 * @since 4.5.0 `$username` now accepts an email address.
 *
 * @param string $username User's username or email address.
 * @param string $password User's password.
 * @return \WP_User|\WP_Error WP_User object if the credentials are valid,
 *                          otherwise WP_Error.
 */
    public function wpAuthenticate(string $username, string $password): \WP_User|\WP_Error;
}
