<?php

namespace WpService\Contracts;

interface WpAuthenticateCookie
{
/**
 * Authenticates the user using the WordPress auth cookie.
 *
 * @since 2.8.0
 *
 * @global string $auth_secure_cookie
 *
 * @param \WP_User|\WP_Error|null $user     WP_User or WP_Error object from a previous callback. Default null.
 * @param string $username Username. If not empty, cancels the cookie authentication.
 * @param string $password Password. If not empty, cancels the cookie authentication.
 * @return \WP_User|\WP_Error WP_User on success, WP_Error on failure.
 */
    public function wpAuthenticateCookie(\WP_User|\WP_Error|null $user, string $username, string $password): \WP_User|\WP_Error;
}
