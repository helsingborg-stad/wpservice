<?php

namespace WpService\Contracts;

interface CacheAdd
{
    /**
     * Adds data to the cache, if the cache key doesn't already exist.
     *
     * @see WP_Object_Cache::add()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param int|string $key    The cache key to use for retrieval later.
     * @param mixed      $data   The data to add to the cache.
     * @param string     $group  Optional. The group to add the cache to. Enables the same key
     *                           to be used across groups. Default empty.
     * @param int        $expire Optional. When the cache data should expire, in seconds.
     *                           Default 0 (no expiration).
     * @return bool True on success, false if cache key and group already exist.
     */
    public function cacheAdd(int|string $key, mixed $data, string $group = '', int $expire = 0): bool;
}
