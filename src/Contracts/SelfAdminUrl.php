<?php

namespace WpService\Contracts;

interface SelfAdminUrl
{
    /**
     * Retrieves the URL to the admin area for either the current site or the network depending on context.
     *
     * @since 3.1.0
     *
     * @param string $path   Optional. Path relative to the admin URL. Default empty.
     * @param string $scheme Optional. The scheme to use. Default is 'admin', which obeys force_ssl_admin()
     *                       and is_ssl(). 'http' or 'https' can be passed to force those schemes.
     * @return string Admin URL link with optional path appended.
     */
    public function selfAdminUrl(string $path = '', string $scheme = 'admin'): string;
}
