<?php

namespace WpService\Contracts;

interface WpCheckPassword
{
    /**
     * Checks the plaintext password against the encrypted Password.
     *
     * Maintains compatibility between old version and the new cookie authentication
     * protocol using PHPass library. The $hash parameter is the encrypted password
     * and the function compares the plain text password when encrypted similarly
     * against the already encrypted password to see if they match.
     *
     * For integration with other applications, this function can be overwritten to
     * instead use the other package password checking algorithm.
     *
     * @since 2.5.0
     *
     * @global PasswordHash $wp_hasher PHPass object used for checking the password
     *                                 against the $hash + $password.
     * @uses PasswordHash::CheckPassword
     *
     * @param string $password Plaintext user's password.
     * @param string $hash     Hash of the user's password to check against.
     * @param string|int $userId  Optional. User ID.
     * @return bool False, if the $password does not match the hashed password.
     */
    public function wpCheckPassword(string $password, string $hash, string|int $userId = ''): bool;
}
