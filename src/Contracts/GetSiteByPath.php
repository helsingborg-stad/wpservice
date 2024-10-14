<?php

namespace WpService\Contracts;

interface GetSiteByPath
{
/**
 * Retrieves the closest matching site object by its domain and path.
 *
 * This will not necessarily return an exact match for a domain and path. Instead, it
 * breaks the domain and path into pieces that are then used to match the closest
 * possibility from a query.
 *
 * The intent of this method is to match a site object during bootstrap for a
 * requested site address
 *
 * @since 3.9.0
 * @since 4.7.0 Updated to always return a `WP_Site` object.
 *
 * @param string $domain   Domain to check.
 * @param string $path     Path to check.
 * @param int|null $segments Path segments to use. Defaults to null, or the full path.
 * @return \WP_Site|false Site object if successful. False when no site is found.
 */
    public function getSiteByPath(string $domain, string $path, int|null $segments = null): \WP_Site|false;
}
