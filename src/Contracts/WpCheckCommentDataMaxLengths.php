<?php

namespace WpService\Contracts;

interface WpCheckCommentDataMaxLengths
{
    /**
 * Compares the lengths of comment data against the maximum character limits.
 *
 * @since 4.7.0
 *
 * @param array $commentData Array of arguments for inserting a comment.
 * @return \WP_Error|true WP_Error when a comment field exceeds the limit,
 *                       otherwise true.
 */
    public function wpCheckCommentDataMaxLengths(array $commentData): \WP_Error|true;
}
