<?php

namespace WpService\Contracts;

interface WpIsPostRevision
{
    /**
     * Determines if the specified post is a revision.
     *
     * @since 2.6.0
     *
     * @param int|\WP_Post $post Post ID or post object.
     * @return int|false ID of revision's parent on success, false if not a revision.
     */
    public function wpIsPostRevision(int|\WP_Post $post): int|false;
}
