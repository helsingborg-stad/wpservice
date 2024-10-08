<?php

namespace WpService\Contracts;

interface UpdateSiteCache
{
    /**
     * Updates sites in cache.
     *
     * @since 4.6.0
     * @since 5.1.0 Introduced the `$update_meta_cache` parameter.
     *
     * @param array $sites             Array of site objects.
     * @param bool $updateMetaCache Whether to update site meta cache. Default true.
     */
    public function updateSiteCache(array $sites, bool $updateMetaCache = true): void;
}
