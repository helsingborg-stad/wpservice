<?php

namespace WpService\Contracts;

interface AllowedHttpRequestHosts
{
/**
 * Marks allowed redirect hosts safe for HTTP requests as well.
 *
 * Attached to the {@see 'http_request_host_is_external'} filter.
 *
 * @since 3.6.0
 *
 * @param bool $isExternal
 * @param string $host
 * @return bool
 */
    public function allowedHttpRequestHosts(bool $isExternal, string $host): bool;
}
