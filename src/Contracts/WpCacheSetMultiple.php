<?php

namespace WpService\Contracts;

interface WpCacheSetMultiple
{
    /**
     * Sets multiple values to the cache in one call.
     *
     * @since 6.0.0
     *
     * @see WP_Object_Cache::set_multiple()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param array $data   Array of keys and values to be set.
     * @param string $group  Optional. Where the cache contents are grouped. Default empty.
     * @param int $expire Optional. When to expire the cache contents, in seconds.
     *                       Default 0 (no expiration).
     * @return bool[] Array of return values, grouped by key. Each value is either
     *                true on success, or false on failure.
     */
    public function wpCacheSetMultiple(array $data, string $group = '', int $expire): array;
}
