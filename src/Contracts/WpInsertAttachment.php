<?php

namespace WpService\Contracts;

interface WpInsertAttachment
{
    /**
 * Inserts an attachment.
 *
 * If you set the 'ID' in the $args parameter, it will mean that you are
 * updating and attempt to update the attachment. You can also set the
 * attachment name or title by setting the key 'post_name' or 'post_title'.
 *
 * You can set the dates for the attachment manually by setting the 'post_date'
 * and 'post_date_gmt' keys' values.
 *
 * By default, the comments will use the default settings for whether the
 * comments are allowed. You can close them manually or keep them open by
 * setting the value for the 'comment_status' key.
 *
 * @since 2.0.0
 * @since 4.7.0 Added the `$wp_error` parameter to allow a WP_Error to be returned on failure.
 * @since 5.6.0 Added the `$fire_after_hooks` parameter.
 *
 * @see wp_insert_post()
 *
 * @param string|array $args             Arguments for inserting an attachment.
 * @param string|false $file             Optional. Filename. Default false.
 * @param int $parentPostId   Optional. Parent post ID or 0 for no parent. Default 0.
 * @param bool $wpError         Optional. Whether to return a WP_Error on failure. Default false.
 * @param bool $fireAfterHooks Optional. Whether to fire the after insert hooks. Default true.
 * @return int|\WP_Error The attachment ID on success. The value 0 or WP_Error on failure.
 */
    public function wpInsertAttachment(string|array $args, string|false $file, int $parentPostId, bool $wpError, bool $fireAfterHooks): int|\WP_Error;
}
