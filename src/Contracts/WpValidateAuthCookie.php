<?php

namespace WpService\Contracts;

interface WpValidateAuthCookie
{
    /**
     * Validates authentication cookie.
     *
     * The checks include making sure that the authentication cookie is set and
     * pulling in the contents (if $cookie is not used).
     *
     * Makes sure the cookie is not expired. Verifies the hash in cookie is what is
     * should be and compares the two.
     *
     * @since 2.5.0
     *
     * @global int $login_grace_period
     *
     * @param string $cookie Optional. If used, will validate contents instead of cookie's.
     * @param string $scheme Optional. The cookie scheme to use: 'auth', 'secure_auth', or 'logged_in'.
     * @return int|false User ID if valid cookie, false if invalid.
     */
    public function wpValidateAuthCookie(string $cookie = '', string $scheme = ''): int|false;
}
