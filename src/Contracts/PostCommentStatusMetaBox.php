<?php

namespace WpService\Contracts;

interface PostCommentStatusMetaBox
{
    /**
 * Displays comments status form fields.
 *
 * @since 2.6.0
 *
 * @param \WP_Post $post Current post object.
 */
    public function postCommentStatusMetaBox(\WP_Post $post): void;
}
