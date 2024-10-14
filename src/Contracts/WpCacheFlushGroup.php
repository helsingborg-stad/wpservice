<?php

namespace WpService\Contracts;

interface WpCacheFlushGroup
{
/**
 * Removes all cache items in a group, if the object cache implementation supports it.
 *
 * Before calling this function, always check for group flushing support using the
 * `wp_cache_supports( 'flush_group' )` function.
 *
 * @since 6.1.0
 *
 * @see WP_Object_Cache::flush_group()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param string $group Name of group to remove from cache.
 * @return bool True if group was flushed, false otherwise.
 */
    public function wpCacheFlushGroup(string $group): bool;
}
