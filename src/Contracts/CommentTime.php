<?php

namespace WpService\Contracts;

interface CommentTime
{
    /**
 * Displays the comment time of the current comment.
 *
 * @since 0.71
 * @since 6.2.0 Added the `$comment_id` parameter.
 *
 * @param string $format     Optional. PHP time format. Defaults to the 'time_format' option.
 * @param int|\WP_Comment $commentId Optional. WP_Comment or ID of the comment for which to print the time.
 *                                   Default current comment.
 */
    public function commentTime(string $format = '', int|\WP_Comment $commentId = 0): void;
}
