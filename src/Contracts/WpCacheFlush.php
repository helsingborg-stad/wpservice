<?php

namespace WpService\Contracts;

interface WpCacheFlush
{
    /**
 * Removes all cache items.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::flush()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @return bool True on success, false on failure.
 */
    public function wpCacheFlush(): bool;
}
