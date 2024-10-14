<?php

namespace WpService\Contracts;

interface WpDeleteAttachment
{
/**
 * Trashes or deletes an attachment.
 *
 * When an attachment is permanently deleted, the file will also be removed.
 * Deletion removes all post meta fields, taxonomy, comments, etc. associated
 * with the attachment (except the main post).
 *
 * The attachment is moved to the Trash instead of permanently deleted unless Trash
 * for media is disabled, item is already in the Trash, or $force_delete is true.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $postId      Attachment ID.
 * @param bool $forceDelete Optional. Whether to bypass Trash and force deletion.
 *                           Default false.
 * @return \WP_Post|false|null Post data on success, false or null on failure.
 */
    public function wpDeleteAttachment(int $postId, bool $forceDelete = false): \WP_Post|false|null;
}
