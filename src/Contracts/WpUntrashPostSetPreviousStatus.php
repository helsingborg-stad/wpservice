<?php

namespace WpService\Contracts;

interface WpUntrashPostSetPreviousStatus
{
    /**
     * Filters callback which sets the status of an untrashed post to its previous status.
     *
     * This can be used as a callback on the `wp_untrash_post_status` filter.
     *
     * @since 5.6.0
     *
     * @param string $newStatus      The new status of the post being restored.
     * @param int $postId         The ID of the post being restored.
     * @param string $previousStatus The status of the post at the point where it was trashed.
     * @return string The new status of the post.
     */
    public function wpUntrashPostSetPreviousStatus(string $newStatus, int $postId, string $previousStatus): string;
}
