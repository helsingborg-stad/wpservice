<?php

namespace WpService\Contracts;

interface WpGetCommentFieldsMaxLengths
{
/**
 * Retrieves the maximum character lengths for the comment form fields.
 *
 * @since 4.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @return int[] Array of maximum lengths keyed by field name.
 */
    public function wpGetCommentFieldsMaxLengths(): array;
}
