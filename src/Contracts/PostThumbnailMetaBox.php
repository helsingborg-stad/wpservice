<?php

namespace WpService\Contracts;

interface PostThumbnailMetaBox
{
    /**
 * Displays post thumbnail meta box.
 *
 * @since 2.9.0
 *
 * @param \WP_Post $post Current post object.
 */
    public function postThumbnailMetaBox(\WP_Post $post): void;
}
