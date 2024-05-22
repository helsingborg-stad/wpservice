<?php

namespace WpService\Contracts;

interface CacheFlush
{
    /**
     * Removes all cache items.
     *
     * @see WP_Object_Cache::flush()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @return bool True on successful removal, false on failure.
     */
    public function cacheFlush(): bool;
}
