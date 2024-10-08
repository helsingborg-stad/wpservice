<?php

namespace WpService\Contracts;

interface WpFilterComment
{
    /**
     * Filters and sanitizes comment data.
     *
     * Sets the comment data 'filtered' field to true when finished. This can be
     * checked as to whether the comment should be filtered and to keep from
     * filtering the same comment more than once.
     *
     * @since 2.0.0
     *
     * @param array $commentdata Contains information on the comment.
     * @return array Parsed comment information.
     */
    public function wpFilterComment(array $commentdata): array;
}
