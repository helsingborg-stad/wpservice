<?php

namespace WpService\Contracts;

interface WpCacheDelete
{
    /**
     * Removes the cache contents matching key and group.
     *
     * @since 2.0.0
     *
     * @see WP_Object_Cache::delete()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param int|string $key   What the contents in the cache are called.
     * @param string $group Optional. Where the cache contents are grouped. Default empty.
     * @return bool True on successful removal, false on failure.
     */
    public function wpCacheDelete(int|string $key, string $group = ''): bool;
}
