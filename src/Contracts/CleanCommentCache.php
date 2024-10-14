<?php

namespace WpService\Contracts;

interface CleanCommentCache
{
/**
 * Removes a comment from the object cache.
 *
 * @since 2.3.0
 *
 * @param int|array $ids Comment ID or an array of comment IDs to remove from cache.
 */
    public function cleanCommentCache(int|array $ids): void;
}
