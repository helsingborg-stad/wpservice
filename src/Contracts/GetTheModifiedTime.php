<?php

namespace WpService\Contracts;

interface GetTheModifiedTime
{
    /**
 * Retrieves the time at which the post was last modified.
 *
 * @since 2.0.0
 * @since 4.6.0 Added the `$post` parameter.
 *
 * @param string $format Optional. Format to use for retrieving the time the post
 *                            was modified. Accepts 'G', 'U', or PHP date format.
 *                            Defaults to the 'time_format' option.
 * @param int|\WP_Post $post   Optional. Post ID or WP_Post object. Default current post.
 * @return string|int|false Formatted date string or Unix timestamp. False on failure.
 */
    public function getTheModifiedTime(string $format = '', int|\WP_Post $post = null): string|int|false;
}
