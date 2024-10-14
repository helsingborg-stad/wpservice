<?php

namespace WpService\Contracts;

interface PostRevisionsMetaBox
{
/**
 * Displays list of revisions.
 *
 * @since 2.6.0
 *
 * @param \WP_Post $post Current post object.
 */
    public function postRevisionsMetaBox(\WP_Post $post): void;
}
