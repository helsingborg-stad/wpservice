<?php

namespace WpService\Contracts;

interface GetPostGallery
{
    /**
     * Checks a specified post's content for gallery and, if present, return the first
     *
     * @since 3.6.0
     *
     * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
     * @param bool $html Optional. Whether to return HTML or data. Default is true.
     * @return string|array Gallery data and srcs parsed from the expanded shortcode.
     */
    public function getPostGallery(int|\WP_Post $post = 0, bool $html = true): string|array;
}
