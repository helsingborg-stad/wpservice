<?php

namespace WpService\Contracts;

interface CacheDelete
{
    /**
     * Removes the cache contents matching key and group.
     *
     * @see WP_Object_Cache::delete()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param int|string $key   The key under which the cache contents are stored.
     * @param string     $group Optional. The group the key is in. Default empty.
     * @return bool True on successful removal, false on failure.
     */
    public function cacheDelete(int|string $key, string $group = ''): bool;
}
