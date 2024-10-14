<?php

namespace WpService\Contracts;

interface BlockCoreCalendarUpdateHasPublishedPostOnTransitionPostStatus
{
/**
 * Handler for updating the has published posts flag when a post status changes.
 *
 * @since 5.9.0
 *
 * @param string $newStatus The status the post is changing to.
 * @param string $oldStatus The status the post is changing from.
 * @param \WP_Post $post       Post object.
 */
    public function blockCoreCalendarUpdateHasPublishedPostOnTransitionPostStatus(string $newStatus, string $oldStatus, \WP_Post $post): void;
}
