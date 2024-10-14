<?php

namespace WpService\Contracts;

interface WpHttpValidateUrl
{
/**
 * Validates a URL for safe use in the HTTP API.
 *
 * Examples of URLs that are considered unsafe:
 *
 * - ftp://example.com/caniload.php - Invalid protocol - only http and https are allowed.
 * - http:///example.com/caniload.php - Malformed URL.
 * - http://user:pass@example.com/caniload.php - Login information.
 * - http://exampleeeee.com/caniload.php - Invalid hostname, as the IP cannot be looked up in DNS.
 *
 * Examples of URLs that are considered unsafe by default:
 *
 * - http://192.168.0.1/caniload.php - IPs from LAN networks.
 *   This can be changed with the {@see 'http_request_host_is_external'} filter.
 * - http://198.143.164.252:81/caniload.php - By default, only 80, 443, and 8080 ports are allowed.
 *   This can be changed with the {@see 'http_allowed_safe_ports'} filter.
 *
 * @since 3.5.2
 *
 * @param string $url Request URL.
 * @return string|false URL or false on failure.
 */
    public function wpHttpValidateUrl(string $url): string|false;
}
