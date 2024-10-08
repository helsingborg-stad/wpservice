<?php

namespace WpService\Contracts;

interface WpSetAuthCookie
{
    /**
     * Sets the authentication cookies based on user ID.
     *
     * The $remember parameter increases the time that the cookie will be kept. The
     * default the cookie is kept without remembering is two days. When $remember is
     * set, the cookies will be kept for 14 days or two weeks.
     *
     * @since 2.5.0
     * @since 4.3.0 Added the `$token` parameter.
     *
     * @param int $userId  User ID.
     * @param bool $remember Whether to remember the user.
     * @param bool|string $secure   Whether the auth cookie should only be sent over HTTPS. Default is an empty
     *                              string which means the value of `is_ssl()` will be used.
     * @param string $token    Optional. User's session token to use for this cookie.
     */
    public function wpSetAuthCookie(int $userId, bool $remember, bool|string $secure, string $token): void;
}
