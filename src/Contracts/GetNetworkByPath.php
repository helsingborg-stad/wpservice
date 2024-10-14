<?php

namespace WpService\Contracts;

interface GetNetworkByPath
{
/**
 * Retrieves the closest matching network for a domain and path.
 *
 * @since 3.9.0
 *
 * @internal In 4.4.0, converted to a wrapper for WP_Network::get_by_path()
 *
 * @param string $domain   Domain to check.
 * @param string $path     Path to check.
 * @param int|null $segments Path segments to use. Defaults to null, or the full path.
 * @return \WP_Network|false Network object if successful. False when no network is found.
 */
    public function getNetworkByPath(string $domain, string $path, int|null $segments = null): \WP_Network|false;
}
