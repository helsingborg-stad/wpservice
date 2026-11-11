<?php

namespace WpService\Contracts;

interface WpCheckPassword
{
/**
 * Checks a plaintext password against a hashed password.
 *
 * Note that this function may be used to check a value that is not a user password.
 * A plugin may use this function to check a password of a different type, and there
 * may not always be a user ID associated with the password.
 *
 * For integration with other applications, this function can be overwritten to
 * instead use the other package password hashing algorithm.
 *
 * @since 2.5.0
 * @since 6.8.0 Passwords in WordPress are now hashed with bcrypt by default. A
 *              password that wasn't hashed with bcrypt will be checked with phpass.
 *
 * @global PasswordHash $wp_hasher phpass object. Used as a fallback for verifying
 *                                 passwords that were hashed with phpass.
 *
 * @param string $password Plaintext password.
 * @param string $hash     Hash of the password to check against.
 * @param string|int $userId  Optional. ID of a user associated with the password.
 * @return bool False, if the $password does not match the hashed password.
 */
    public function wpCheckPassword(string $password, string $hash, string|int $userId = ''): bool;
}
