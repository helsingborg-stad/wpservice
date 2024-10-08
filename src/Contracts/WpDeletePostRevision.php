<?php

namespace WpService\Contracts;

interface WpDeletePostRevision
{
    /**
     * Deletes a revision.
     *
     * Deletes the row from the posts table corresponding to the specified revision.
     *
     * @since 2.6.0
     *
     * @param int|\WP_Post $revision Revision ID or revision object.
     * @return \WP_Post|false|null Null or false if error, deleted post object if success.
     */
    public function wpDeletePostRevision(int|\WP_Post $revision): \WP_Post|false|null;
}
