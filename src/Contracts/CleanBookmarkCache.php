<?php

namespace WpService\Contracts;

interface CleanBookmarkCache
{
    /**
     * Deletes the bookmark cache.
     *
     * @since 2.7.0
     *
     * @param int $bookmarkId Bookmark ID.
     */
    public function cleanBookmarkCache(int $bookmarkId): void;
}
