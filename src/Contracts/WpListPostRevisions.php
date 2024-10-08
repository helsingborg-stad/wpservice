<?php

namespace WpService\Contracts;

interface WpListPostRevisions
{
    /**
     * Displays a list of a post's revisions.
     *
     * Can output either a UL with edit links or a TABLE with diff interface, and
     * restore action links.
     *
     * @since 2.6.0
     *
     * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
     * @param string $type 'all' (default), 'revision' or 'autosave'
     */
    public function wpListPostRevisions(int|\WP_Post $post = 0, string $type = 'all'): void;
}
