<?php

namespace WpService\Contracts;

interface MsAllowedHttpRequestHosts
{
    /**
 * Adds any domain in a multisite installation for safe HTTP requests to the
 * allowed list.
 *
 * Attached to the {@see 'http_request_host_is_external'} filter.
 *
 * @since 3.6.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param bool $isExternal
 * @param string $host
 * @return bool
 */
    public function msAllowedHttpRequestHosts(bool $isExternal, string $host): bool;
}
