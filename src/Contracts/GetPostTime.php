<?php

namespace WpService\Contracts;

interface GetPostTime
{
    /**
     * Retrieves the time at which the post was written.
     *
     * @since 2.0.0
     *
     * @param string $format    Optional. Format to use for retrieving the time the post
     *                               was written. Accepts 'G', 'U', or PHP date format. Default 'U'.
     * @param bool $gmt       Optional. Whether to retrieve the GMT time. Default false.
     * @param int|\WP_Post $post      Post ID or post object. Default is global `$post` object.
     * @param bool $translate Whether to translate the time string. Default false.
     * @return string|int|false Formatted date string or Unix timestamp if `$format` is 'U' or 'G'.
     *                          False on failure.
     */
    public function getPostTime(string $format = 'U', bool $gmt = false, int|\WP_Post $post = null, bool $translate = false): string|int|false;
}
