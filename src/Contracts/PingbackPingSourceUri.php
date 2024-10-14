<?php

namespace WpService\Contracts;

interface PingbackPingSourceUri
{
/**
 * Default filter attached to pingback_ping_source_uri to validate the pingback's Source URI.
 *
 * @since 3.5.1
 *
 * @see wp_http_validate_url()
 *
 * @param string $sourceUri
 * @return string
 */
    public function pingbackPingSourceUri(string $sourceUri): string;
}
