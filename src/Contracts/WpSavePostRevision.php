<?php

namespace WpService\Contracts;

interface WpSavePostRevision
{
    /**
 * Creates a revision for the current version of a post.
 *
 * Typically used immediately after a post update, as every update is a revision,
 * and the most recent revision always matches the current post.
 *
 * @since 2.6.0
 *
 * @param int $postId The ID of the post to save as a revision.
 * @return int|\WP_Error|void Void or 0 if error, new revision ID, if success.
 */
    public function wpSavePostRevision(int $postId): mixed;
}
