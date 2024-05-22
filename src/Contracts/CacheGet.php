<?php

namespace WpService\Contracts;

interface CacheGet
{
    /**
     * Retrieves the cache contents from the cache by key and group.
     *
     * @see WP_Object_Cache::get()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param int|string $key    The cache key to use for retrieval later.
     * @param string     $group  Optional. The group the key is in. Default empty.
     * @param bool       $force  Optional. Whether to force an update of the local cache from the persistent cache.
     *                           Default false.
     * @param bool       $found  Optional. Whether the key was found in the cache. Disambiguates a return of false,
     *                           a storable value. Passed by reference. Default null.
     * @return mixed|false The cache contents on success, false on failure to retrieve contents.
     */
    public function cacheGet(
        int|string $key,
        string $group = '',
        bool $force = false,
        bool &$found = null
    ): mixed;
}
