<?php

namespace WpService\Contracts;

interface CleanBlogCache
{
    /**
 * Clean the blog cache
 *
 * @since 3.5.0
 *
 * @global bool $_wp_suspend_cache_invalidation
 *
 * @param \WP_Site|int $blog The site object or ID to be cleared from cache.
 */
    public function cleanBlogCache(\WP_Site|int $blog): void;
}
