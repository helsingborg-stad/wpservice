<?php

namespace WpService\Contracts;

interface CleanSiteDetailsCache
{
    /**
     * Cleans the site details cache for a site.
     *
     * @since 4.7.4
     *
     * @param int $siteId Optional. Site ID. Default is the current site ID.
     */
    public function cleanSiteDetailsCache(int $siteId = 0): void;
}
