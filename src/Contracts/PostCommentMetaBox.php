<?php

namespace WpService\Contracts;

interface PostCommentMetaBox
{
/**
 * Displays comments for post.
 *
 * @since 2.8.0
 *
 * @param \WP_Post $post Current post object.
 */
    public function postCommentMetaBox(\WP_Post $post): void;
}
