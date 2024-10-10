<?php

namespace WpService\Contracts;

interface GetTheTitleRss
{
    /**
     * Retrieves the current post title for the feed.
     *
     * @since 2.0.0
     * @since 6.6.0 Added the `$post` parameter.
     *
     * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
     * @return string Current post title.
     */
    public function getTheTitleRss(int|\WP_Post $post): string;
}
