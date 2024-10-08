<?php

namespace WpService\Contracts;

interface CleanAttachmentCache
{
    /**
 * Will clean the attachment in the cache.
 *
 * Cleaning means delete from the cache. Optionally will clean the term
 * object cache associated with the attachment ID.
 *
 * This function will not run if $_wp_suspend_cache_invalidation is not empty.
 *
 * @since 3.0.0
 *
 * @global bool $_wp_suspend_cache_invalidation
 *
 * @param int $id          The attachment ID in the cache to clean.
 * @param bool $cleanTerms Optional. Whether to clean terms cache. Default false.
 */
    public function cleanAttachmentCache(int $id, bool $cleanTerms): void;
}
