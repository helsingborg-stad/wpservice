<?php

namespace WpService\Contracts;

interface GetTheExcerpt
{
    /**
     * Retrieves the post excerpt.
     *
     * @since 0.71
     * @since 4.5.0 Introduced the `$post` parameter.
     *
     * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
     * @return string Post excerpt.
     */
    public function getTheExcerpt(int|\WP_Post $post = null): string;
}
