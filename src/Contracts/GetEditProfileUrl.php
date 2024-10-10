<?php

namespace WpService\Contracts;

interface GetEditProfileUrl
{
    /**
     * Retrieves the URL to the user's profile editor.
     *
     * @since 3.1.0
     *
     * @param int $userId Optional. User ID. Defaults to current user.
     * @param string $scheme  Optional. The scheme to use. Default is 'admin', which obeys force_ssl_admin()
     *                        and is_ssl(). 'http' or 'https' can be passed to force those schemes.
     * @return string Dashboard URL link with optional path appended.
     */
    public function getEditProfileUrl(int $userId, string $scheme = 'admin'): string;
}
