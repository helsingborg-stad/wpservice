<?php

namespace WpService\Contracts;

interface GetTheTime
{
/**
 * Retrieves the time at which the post was written.
 *
 * @since 1.5.0
 *
 * @param string $format Optional. Format to use for retrieving the time the post
 *                            was written. Accepts 'G', 'U', or PHP date format.
 *                            Defaults to the 'time_format' option.
 * @param int|\WP_Post $post   Post ID or post object. Default is global `$post` object.
 * @return string|int|false Formatted date string or Unix timestamp if `$format` is 'U' or 'G'.
 *                          False on failure.
 */
    public function getTheTime(string $format = '', int|\WP_Post $post = null): string|int|false;
}
