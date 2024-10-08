<?php

namespace WpService\Contracts;

interface WpCacheReplace
{
    /**
 * Replaces the contents of the cache with new data.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::replace()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key    The key for the cache data that should be replaced.
 * @param mixed $data   The new data to store in the cache.
 * @param string $group  Optional. The group for the cache data that should be replaced.
 *                           Default empty.
 * @param int $expire Optional. When to expire the cache contents, in seconds.
 *                           Default 0 (no expiration).
 * @return bool True if contents were replaced, false if original value does not exist.
 */
    public function wpCacheReplace(int|string $key, mixed $data, string $group = '', int $expire = 0): bool;
}
