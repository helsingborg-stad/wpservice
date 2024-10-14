<?php

namespace WpService\Contracts;

interface WpCacheDecr
{
/**
 * Decrements numeric cache item's value.
 *
 * @since 3.3.0
 *
 * @see WP_Object_Cache::decr()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key    The cache key to decrement.
 * @param int $offset Optional. The amount by which to decrement the item's value.
 *                           Default 1.
 * @param string $group  Optional. The group the key is in. Default empty.
 * @return int|false The item's new value on success, false on failure.
 */
    public function wpCacheDecr(int|string $key, int $offset = 1, string $group = ''): int|false;
}
