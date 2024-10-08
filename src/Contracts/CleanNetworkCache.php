<?php

namespace WpService\Contracts;

interface CleanNetworkCache
{
    /**
 * Removes a network from the object cache.
 *
 * @since 4.6.0
 *
 * @global bool $_wp_suspend_cache_invalidation
 *
 * @param int|array $ids Network ID or an array of network IDs to remove from cache.
 */
    public function cleanNetworkCache(int|array $ids): void;
}
