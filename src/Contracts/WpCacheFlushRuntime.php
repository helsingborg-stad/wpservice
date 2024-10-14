<?php

namespace WpService\Contracts;

interface WpCacheFlushRuntime
{
/**
 * Removes all cache items from the in-memory runtime cache.
 *
 * @since 6.0.0
 *
 * @see WP_Object_Cache::flush()
 *
 * @return bool True on success, false on failure.
 */
    public function wpCacheFlushRuntime(): bool;
}
