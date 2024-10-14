<?php

namespace WpService\Contracts;

interface WpLazyloadSiteMeta
{
/**
 * Queue site meta for lazy-loading.
 *
 * @since 6.3.0
 *
 * @param array $siteIds List of site IDs.
 */
    public function wpLazyloadSiteMeta(array $siteIds): void;
}
