<?php

namespace WpService\Contracts;

interface WpRestorePostRevisionMeta
{
    /**
     * Restore the revisioned meta values for a post.
     *
     * @since 6.4.0
     *
     * @param int $postId     The ID of the post to restore the meta to.
     * @param int $revisionId The ID of the revision to restore the meta from.
     */
    public function wpRestorePostRevisionMeta(int $postId, int $revisionId): void;
}
