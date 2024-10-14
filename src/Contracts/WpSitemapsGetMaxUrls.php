<?php

namespace WpService\Contracts;

interface WpSitemapsGetMaxUrls
{
/**
 * Gets the maximum number of URLs for a sitemap.
 *
 * @since 5.5.0
 *
 * @param string $objectType Object type for sitemap to be filtered (e.g. 'post', 'term', 'user').
 * @return int The maximum number of URLs.
 */
    public function wpSitemapsGetMaxUrls(string $objectType): int;
}
