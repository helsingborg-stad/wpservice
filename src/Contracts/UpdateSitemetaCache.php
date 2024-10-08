<?php

namespace WpService\Contracts;

interface UpdateSitemetaCache
{
    /**
     * Updates metadata cache for list of site IDs.
     *
     * Performs SQL query to retrieve all metadata for the sites matching `$site_ids` and stores them in the cache.
     * Subsequent calls to `get_site_meta()` will not need to query the database.
     *
     * @since 5.1.0
     *
     * @param array $siteIds List of site IDs.
     * @return array|false An array of metadata on success, false if there is nothing to update.
     */
    public function updateSitemetaCache(array $siteIds): array|false;
}
