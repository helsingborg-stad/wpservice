<?php

namespace WpService\Contracts;

interface WpGenerateAuthCookie
{
    /**
     * Generates authentication cookie contents.
     *
     * @since 2.5.0
     * @since 4.0.0 The `$token` parameter was added.
     *
     * @param int $userId    User ID.
     * @param int $expiration The time the cookie expires as a UNIX timestamp.
     * @param string $scheme     Optional. The cookie scheme to use: 'auth', 'secure_auth', or 'logged_in'.
     *                           Default 'auth'.
     * @param string $token      User's session token to use for this cookie.
     * @return string Authentication cookie contents. Empty string if user does not exist.
     */
    public function wpGenerateAuthCookie(int $userId, int $expiration, string $scheme = 'auth', string $token = ''): string;
}
