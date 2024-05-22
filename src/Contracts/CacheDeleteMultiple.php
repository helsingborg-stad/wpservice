<?php

namespace WpService\Contracts;

interface CacheDeleteMultiple
{
    /**
     * Removes multiple cache contents by key and group.
     *
     * @see WP_Object_Cache::delete_multiple()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param array<int|string> $keys  Array of keys to remove from cache.
     * @param string            $group Optional. The group the key is in. Default empty.
     * @return bool True on successful removal, false on failure.
     */
    public function cacheDeleteMultiple(array $keys, string $group = ''): bool;
}
