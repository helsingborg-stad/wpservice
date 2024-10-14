<?php

namespace WpService\Contracts;

interface SanitizeTrackbackUrls
{
/**
 * Sanitizes space or carriage return separated URLs that are used to send trackbacks.
 *
 * @since 3.4.0
 *
 * @param string $toPing Space or carriage return separated URLs
 * @return string URLs starting with the http or https protocol, separated by a carriage return.
 */
    public function sanitizeTrackbackUrls(string $toPing): string;
}
