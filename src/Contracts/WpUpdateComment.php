<?php

namespace WpService\Contracts;

interface WpUpdateComment
{
    /**
     * Updates an existing comment in the database.
     *
     * Filters the comment and makes sure certain fields are valid before updating.
     *
     * @since 2.0.0
     * @since 4.9.0 Add updating comment meta during comment update.
     * @since 5.5.0 The `$wp_error` parameter was added.
     * @since 5.5.0 The return values for an invalid comment or post ID
     *              were changed to false instead of 0.
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array $commentarr Contains information on the comment.
     * @param bool $wpError   Optional. Whether to return a WP_Error on failure. Default false.
     * @return int|false|\WP_Error The value 1 if the comment was updated, 0 if not updated.
     *                            False or a WP_Error object on failure.
     */
    public function wpUpdateComment(array $commentarr, bool $wpError = false): int|false|\WP_Error;
}
