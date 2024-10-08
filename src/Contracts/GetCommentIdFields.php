<?php

namespace WpService\Contracts;

interface GetCommentIdFields
{
    /**
     * Retrieves hidden input HTML for replying to comments.
     *
     * @since 3.0.0
     * @since 6.2.0 Renamed `$post_id` to `$post` and added WP_Post support.
     *
     * @param int|\WP_Post|null $post Optional. The post the comment is being displayed for.
     *                               Defaults to the current global post.
     * @return string Hidden input HTML for replying to comments.
     */
    public function getCommentIdFields(int|\WP_Post|null $post = null): string;
}
