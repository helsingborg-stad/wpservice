<?php

namespace WpService\Contracts;

interface WpRevisionsToKeep
{
    /**
 * Determines how many revisions to retain for a given post.
 *
 * By default, an infinite number of revisions are kept.
 *
 * The constant WP_POST_REVISIONS can be set in wp-config to specify the limit
 * of revisions to keep.
 *
 * @since 3.6.0
 *
 * @param \WP_Post $post The post object.
 * @return int The number of revisions to keep.
 */
    public function wpRevisionsToKeep(\WP_Post $post): int;
}
