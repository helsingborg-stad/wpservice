<?php

namespace WpService\Contracts;

interface WpRegisterSitemapProvider
{
    /**
     * Registers a new sitemap provider.
     *
     * @since 5.5.0
     *
     * @param string $name     Unique name for the sitemap provider.
     * @param \WP_Sitemaps_Provider $provider The `Sitemaps_Provider` instance implementing the sitemap.
     * @return bool Whether the sitemap was added.
     */
    public function wpRegisterSitemapProvider(string $name, \WP_Sitemaps_Provider $provider): bool;
}
