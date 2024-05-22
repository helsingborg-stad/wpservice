<?php

namespace WpService\Contracts;

interface CacheSet
{
    /**
     * Differs from wp_cache_add() and wp_cache_replace() in that it will always write data.
     *
     * @see WP_Object_Cache::set()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param int|string $key    The cache key to use for retrieval later.
     * @param mixed      $data   The data to add to the cache.
     * @param string     $group  Optional. The group to add the cache to. Enables the same key
     *                           to be used across groups. Default empty.
     * @param int        $expire Optional. When the cache data should expire, in seconds.
     *                           Default 0 (no expiration).
     * @return bool True on success, false if the cache key already exists.
     */
    public function cacheSet(int|string $key, mixed $data, string $group = '', int $expire = 0): bool;
}
