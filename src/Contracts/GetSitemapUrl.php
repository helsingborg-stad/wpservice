<?php

namespace WpService\Contracts;

interface GetSitemapUrl
{
/**
 * Retrieves the full URL for a sitemap.
 *
 * @since 5.5.1
 *
 * @param string $name         The sitemap name.
 * @param string $subtypeName The sitemap subtype name. Default empty string.
 * @param int $page         The page of the sitemap. Default 1.
 * @return string|false The sitemap URL or false if the sitemap doesn't exist.
 */
    public function getSitemapUrl(string $name, string $subtypeName = '', int $page = 1): string|false;
}
