<?php

namespace WpService\Contracts;

interface TrackbackUrl
{
    /**
 * Displays the current post's trackback URL.
 *
 * @since 0.71
 *
 * @param bool $deprecatedEcho Not used.
 * @return void|string Should only be used to echo the trackback URL, use get_trackback_url()
 *                     for the result instead.
 */
    public function trackbackUrl(bool $deprecatedEcho = true): string;
}
