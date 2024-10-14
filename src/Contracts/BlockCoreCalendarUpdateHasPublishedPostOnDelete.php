<?php

namespace WpService\Contracts;

interface BlockCoreCalendarUpdateHasPublishedPostOnDelete
{
/**
 * Handler for updating the has published posts flag when a post is deleted.
 *
 * @since 5.9.0
 *
 * @param int $postId Deleted post ID.
 */
    public function blockCoreCalendarUpdateHasPublishedPostOnDelete(int $postId): void;
}
