<?php

namespace WpService\Contracts;

interface WpAuthenticateUsernamePassword
{
    /**
     * Authenticates a user, confirming the username and password are valid.
     *
     * @since 2.8.0
     *
     * @param \WP_User|\WP_Error|null $user     WP_User or WP_Error object from a previous callback. Default null.
     * @param string $username Username for authentication.
     * @param string $password Password for authentication.
     * @return \WP_User|\WP_Error WP_User on success, WP_Error on failure.
     */
    public function wpAuthenticateUsernamePassword(\WP_User|\WP_Error|null $user, string $username, string $password): \WP_User|\WP_Error;
}
