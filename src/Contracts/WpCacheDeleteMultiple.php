<?php

namespace WpService\Contracts;

interface WpCacheDeleteMultiple
{
    /**
 * Deletes multiple values from the cache in one call.
 *
 * @since 6.0.0
 *
 * @see WP_Object_Cache::delete_multiple()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param array $keys  Array of keys under which the cache to deleted.
 * @param string $group Optional. Where the cache contents are grouped. Default empty.
 * @return bool[] Array of return values, grouped by key. Each value is either
 *                true on success, or false if the contents were not deleted.
 */
    public function wpCacheDeleteMultiple(array $keys, string $group = ''): array;
}
