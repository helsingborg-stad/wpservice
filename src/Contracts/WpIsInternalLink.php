<?php

namespace WpService\Contracts;

interface WpIsInternalLink
{
/**
 * Determines whether or not the specified URL is of a host included in the internal hosts list.
 *
 * @see wp_internal_hosts()
 *
 * @since 6.2.0
 *
 * @param string $link The URL to test.
 * @return bool Returns true for internal URLs and false for all other URLs.
 */
    public function wpIsInternalLink(string $link): bool;
}
