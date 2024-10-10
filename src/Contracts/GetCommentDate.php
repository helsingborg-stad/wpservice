<?php

namespace WpService\Contracts;

interface GetCommentDate
{
    /**
     * Retrieves the comment date of the current comment.
     *
     * @since 1.5.0
     * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
     *
     * @param string $format     Optional. PHP date format. Defaults to the 'date_format' option.
     * @param int|\WP_Comment $commentId Optional. WP_Comment or ID of the comment for which to get the date.
     *                                   Default current comment.
     * @return string The comment's date.
     */
    public function getCommentDate(string $format = '', int|\WP_Comment $commentId): string;
}
