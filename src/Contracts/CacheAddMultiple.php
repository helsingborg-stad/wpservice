<?php

namespace WpService\Contracts;

interface CacheAddMultiple
{
    /**
     * Adds multiple values to the cache.
     *
     * @see WP_Object_Cache::add()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param array<int|string, mixed> $items  Associative array of item data to add to cache.
     * @param string                    $group  Optional. The group to add the cache to. Enables the same key
     *                                         to be used across groups. Default empty.
     * @param int                       $expire Optional. When the cache data should expire, in seconds.
     *                                         Default 0 (no expiration).
     * @return bool[] Array of success statuses for each item added to cache.
     */
    public function cacheAddMultiple(array $items, string $group = '', int $expire = 0): array;
}
