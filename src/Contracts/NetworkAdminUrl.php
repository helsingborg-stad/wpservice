<?php

namespace WpService\Contracts;

interface NetworkAdminUrl
{
    /**
 * Retrieves the URL to the admin area for the network.
 *
 * @since 3.0.0
 *
 * @param string $path   Optional path relative to the admin URL. Default empty.
 * @param string $scheme Optional. The scheme to use. Default is 'admin', which obeys force_ssl_admin()
 *                       and is_ssl(). 'http' or 'https' can be passed to force those schemes.
 * @return string Admin URL link with optional path appended.
 */
    public function networkAdminUrl(string $path, string $scheme): string;
}
