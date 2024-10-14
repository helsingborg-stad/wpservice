<?php

namespace WpService\Contracts;

interface GetMediaItem
{
/**
 * Retrieves HTML form for modifying the image attachment.
 *
 * @since 2.5.0
 *
 * @global string $redir_tab
 *
 * @param int $attachmentId Attachment ID for modification.
 * @param string|array $args          Optional. Override defaults.
 * @return string HTML form for attachment.
 */
    public function getMediaItem(int $attachmentId, string|array $args = null): string;
}
