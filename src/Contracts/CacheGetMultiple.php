<?php

namespace WpService\Contracts;

interface CacheGetMultiple
{
    /**
     * Retrieves multiple cache contents from the cache by key and group.
     *
     * @see WP_Object_Cache::get_multiple()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param array<int|string> $keys   Array of keys to retrieve from cache.
     * @param string            $group  Optional. The group the key is in. Default empty.
     * @param bool              $force  Optional. Whether to force an update of the local cache
     *                                   from the persistent cache.
     *                                   Default false.
     * @return array<int|string, mixed> Array of cache contents, keyed by the cache keys provided.
     */
    public function cacheGetMultiple(array $keys, string $group = '', bool $force = false): array;
}
