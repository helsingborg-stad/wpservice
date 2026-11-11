<?php

namespace WpService\Contracts;

interface WpHashPassword
{
/**
 * Creates a hash of a plain text password.
 *
 * For integration with other applications, this function can be overwritten to
 * instead use the other package password hashing algorithm.
 *
 * @since 2.5.0
 * @since 6.8.0 The password is now hashed using bcrypt by default instead of phpass.
 *
 * @global PasswordHash $wp_hasher phpass object.
 *
 * @param string $password Plain text user password to hash.
 * @return string The hash string of the password.
 */
    public function wpHashPassword(string $password): string;
}
