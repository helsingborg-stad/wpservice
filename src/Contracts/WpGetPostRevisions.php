<?php

namespace WpService\Contracts;

interface WpGetPostRevisions
{
    /**
     * Returns all revisions of specified post.
     *
     * @since 2.6.0
     *
     * @see get_children()
     *
     * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
     * @param array|null $args Optional. Arguments for retrieving post revisions. Default null.
     * @return WP_Post[]|int[] Array of revision objects or IDs, or an empty array if none.
     */
    public function wpGetPostRevisions(int|\WP_Post $post, array|null $args = null): array;
}
