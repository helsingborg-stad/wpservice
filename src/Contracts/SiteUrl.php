<?php

namespace WpService\Contracts;

interface SiteUrl
{
    /**
 * Retrieves the URL for the current site where WordPress application files
 * (e.g. wp-blog-header.php or the wp-admin/ folder) are accessible.
 *
 * Returns the 'site_url' option with the appropriate protocol, 'https' if
 * is_ssl() and 'http' otherwise. If $scheme is 'http' or 'https', is_ssl() is
 * overridden.
 *
 * @since 3.0.0
 *
 * @param string $path   Optional. Path relative to the site URL. Default empty.
 * @param string|null $scheme Optional. Scheme to give the site URL context. See set_url_scheme().
 * @return string Site URL link with optional path appended.
 */
    public function siteUrl(string $path = '', string|null $scheme = null): string;
}
