<?php

namespace WpService\Contracts;

interface WpSuspendCacheInvalidation
{
    /**
     * Suspends cache invalidation.
     *
     * Turns cache invalidation on and off. Useful during imports where you don't want to do
     * invalidations every time a post is inserted. Callers must be sure that what they are
     * doing won't lead to an inconsistent cache when invalidation is suspended.
     *
     * @since 2.7.0
     *
     * @global bool $_wp_suspend_cache_invalidation
     *
     * @param bool $suspend Optional. Whether to suspend or enable cache invalidation. Default true.
     * @return bool The current suspend setting.
     */
    public function wpSuspendCacheInvalidation(bool $suspend = true): bool;
}
