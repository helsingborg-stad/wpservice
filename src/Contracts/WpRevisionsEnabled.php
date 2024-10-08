<?php

namespace WpService\Contracts;

interface WpRevisionsEnabled
{
    /**
     * Determines whether revisions are enabled for a given post.
     *
     * @since 3.6.0
     *
     * @param \WP_Post $post The post object.
     * @return bool True if number of revisions to keep isn't zero, false otherwise.
     */
    public function wpRevisionsEnabled(\WP_Post $post): bool;
}
