<?php

namespace WpService\Contracts;

interface ThePostThumbnailCaption
{
    /**
     * Displays the post thumbnail caption.
     *
     * @since 4.6.0
     *
     * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
     */
    public function thePostThumbnailCaption(int|\WP_Post $post = null): void;
}
