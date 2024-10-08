<?php

namespace WpService\Contracts;

interface WpRestorePostRevision
{
    /**
 * Restores a post to the specified revision.
 *
 * Can restore a past revision using all fields of the post revision, or only selected fields.
 *
 * @since 2.6.0
 *
 * @param int|\WP_Post $revision Revision ID or revision object.
 * @param array $fields   Optional. What fields to restore from. Defaults to all.
 * @return int|false|null Null if error, false if no fields to restore, (int) post ID if success.
 */
    public function wpRestorePostRevision(int|\WP_Post $revision, array $fields = null): int|false|null;
}
