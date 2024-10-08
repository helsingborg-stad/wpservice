<?php

namespace WpService\Contracts;

interface NetworkSiteUrl
{
    /**
 * Retrieves the site URL for the current network.
 *
 * Returns the site URL with the appropriate protocol, 'https' if
 * is_ssl() and 'http' otherwise. If $scheme is 'http' or 'https', is_ssl() is
 * overridden.
 *
 * @since 3.0.0
 *
 * @see set_url_scheme()
 *
 * @param string $path   Optional. Path relative to the site URL. Default empty.
 * @param string|null $scheme Optional. Scheme to give the site URL context. Accepts
 *                            'http', 'https', or 'relative'. Default null.
 * @return string Site URL link with optional path appended.
 */
    public function networkSiteUrl(string $path = '', string|null $scheme = null): string;
}
