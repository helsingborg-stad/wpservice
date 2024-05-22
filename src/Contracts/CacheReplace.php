<?php

namespace WpService\Contracts;

interface CacheReplace
{
    /**
     * Replaces the contents of a cache key, if it exists.
     *
     * @see WP_Object_Cache::replace()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param int|string $key    The cache key to use for retrieval later.
     * @param mixed      $data   The data to add to the cache.
     * @param string     $group  Optional. The group to add the cache to. Enables the same key
     *                           to be used across groups. Default empty.
     * @param int        $expire Optional. When the cache data should expire, in seconds.
     *                           Default 0 (no expiration).
     * @return bool True on success, false if the cache key doesn't exist.
     */
    public function cacheReplace(int|string $key, mixed $data, string $group = '', int $expire = 0): bool;
}
