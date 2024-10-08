<?php

namespace WpService\Contracts;

interface WpImageEditor
{
    /**
 * Loads the WP image-editing interface.
 *
 * @since 2.9.0
 *
 * @param int $postId Attachment post ID.
 * @param false|object $msg     Optional. Message to display for image editor updates or errors.
 *                              Default false.
 */
    public function wpImageEditor(int $postId, false|object $msg): void;
}
