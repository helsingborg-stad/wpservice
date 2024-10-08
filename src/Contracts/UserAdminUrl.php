<?php

namespace WpService\Contracts;

interface UserAdminUrl
{
    /**
 * Retrieves the URL to the admin area for the current user.
 *
 * @since 3.0.0
 *
 * @param string $path   Optional. Path relative to the admin URL. Default empty.
 * @param string $scheme Optional. The scheme to use. Default is 'admin', which obeys force_ssl_admin()
 *                       and is_ssl(). 'http' or 'https' can be passed to force those schemes.
 * @return string Admin URL link with optional path appended.
 */
    public function userAdminUrl(string $path = '', string $scheme = 'admin'): string;
}
