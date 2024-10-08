<?php

namespace WpService\Contracts;

interface CleanPostCache
{
    /**
 * Will clean the post in the cache.
 *
 * Cleaning means delete from the cache of the post. Will call to clean the term
 * object cache associated with the post ID.
 *
 * This function not run if $_wp_suspend_cache_invalidation is not empty. See
 * wp_suspend_cache_invalidation().
 *
 * @since 2.0.0
 *
 * @global bool $_wp_suspend_cache_invalidation
 *
 * @param int|\WP_Post $post Post ID or post object to remove from the cache.
 */
    public function cleanPostCache(int|\WP_Post $post): void;
}
