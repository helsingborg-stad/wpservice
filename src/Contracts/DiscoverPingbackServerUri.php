<?php

namespace WpService\Contracts;

interface DiscoverPingbackServerUri
{
/**
 * Finds a pingback server URI based on the given URL.
 *
 * Checks the HTML for the rel="pingback" link and X-Pingback headers. It does
 * a check for the X-Pingback headers first and returns that, if available.
 * The check for the rel="pingback" has more overhead than just the header.
 *
 * @since 1.5.0
 *
 * @param string $url        URL to ping.
 * @param string $deprecated Not Used.
 * @return string|false String containing URI on success, false on failure.
 */
    public function discoverPingbackServerUri(string $url, string $deprecated = ''): string|false;
}
