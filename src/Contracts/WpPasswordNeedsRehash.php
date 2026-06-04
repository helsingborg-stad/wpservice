<?php

namespace WpService\Contracts;

interface WpPasswordNeedsRehash
{
/**
 * Checks whether a password hash needs to be rehashed.
 *
 * Passwords are hashed with bcrypt using the default cost. A password hashed in a prior version
 * of WordPress may still be hashed with phpass and will need to be rehashed. If the default cost
 * or algorithm is changed in PHP or WordPress then a password hashed in a previous version will
 * need to be rehashed.
 *
 * Note that, just like wp_check_password(), this function may be used to check a value that is
 * not a user password. A plugin may use this function to check a password of a different type,
 * and there may not always be a user ID associated with the password.
 *
 * @since 6.8.0
 *
 * @global PasswordHash $wp_hasher phpass object.
 *
 * @param string $hash    Hash of a password to check.
 * @param string|int $userId Optional. ID of a user associated with the password.
 * @return bool Whether the hash needs to be rehashed.
 */
    public function wpPasswordNeedsRehash(string $hash, string|int $userId = ''): bool;
}
