<?php

namespace WpService\Contracts;

interface WpHashPassword
{
    /**
     * Creates a hash (encrypt) of a plain text password.
     *
     * For integration with other applications, this function can be overwritten to
     * instead use the other package password checking algorithm.
     *
     * @since 2.5.0
     *
     * @global PasswordHash $wp_hasher PHPass object.
     *
     * @param string $password Plain text user password to hash.
     * @return string The hash string of the password.
     */
    public function wpHashPassword(string $password): string;
}
