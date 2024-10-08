<?php

namespace WpService\Contracts;

interface WpGetSitemapProviders
{
    /**
 * Gets an array of sitemap providers.
 *
 * @since 5.5.0
 *
 * @return WP_Sitemaps_Provider[] Array of sitemap providers.
 */
    public function wpGetSitemapProviders(): array;
}
