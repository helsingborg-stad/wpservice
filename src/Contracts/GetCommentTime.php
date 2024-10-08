<?php

namespace WpService\Contracts;

interface GetCommentTime
{
    /**
 * Retrieves the comment time of the current comment.
 *
 * @since 1.5.0
 * @since 6.2.0 Added the `$comment_id` parameter.
 *
 * @param string $format     Optional. PHP date format. Defaults to the 'time_format' option.
 * @param bool $gmt        Optional. Whether to use the GMT date. Default false.
 * @param bool $translate  Optional. Whether to translate the time (for use in feeds).
 *                                   Default true.
 * @param int|\WP_Comment $commentId Optional. WP_Comment or ID of the comment for which to get the time.
 *                                   Default current comment.
 * @return string The formatted time.
 */
    public function getCommentTime(string $format, bool $gmt, bool $translate, int|\WP_Comment $commentId): string;
}
