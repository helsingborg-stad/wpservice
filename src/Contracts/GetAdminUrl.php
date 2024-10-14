<?php

namespace WpService\Contracts;

interface GetAdminUrl
{
/**
 * Retrieves the URL to the admin area for a given site.
 *
 * @since 3.0.0
 *
 * @param int|null $blogId Optional. Site ID. Default null (current site).
 * @param string $path    Optional. Path relative to the admin URL. Default empty.
 * @param string $scheme  Optional. The scheme to use. Accepts 'http' or 'https',
 *                          to force those schemes. Default 'admin', which obeys
 *                          force_ssl_admin() and is_ssl().
 * @return string Admin URL link with optional path appended.
 */
    public function getAdminUrl(int|null $blogId = null, string $path = '', string $scheme = 'admin'): string;
}
