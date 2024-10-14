<?php

namespace WpService\Contracts;

interface MediaHandleUpload
{
/**
 * Saves a file submitted from a POST request and create an attachment post for it.
 *
 * @since 2.5.0
 *
 * @param string $fileId   Index of the `$_FILES` array that the file was sent.
 * @param int $postId   The post ID of a post to attach the media item to. Required, but can
 *                          be set to 0, creating a media item that has no relationship to a post.
 * @param array $postData Optional. Overwrite some of the attachment.
 * @param array $overrides Optional. Override the wp_handle_upload() behavior.
 * @return int|\WP_Error ID of the attachment or a WP_Error object on failure.
 */
    public function mediaHandleUpload(string $fileId, int $postId, array $postData = [], array $overrides = []): int|\WP_Error;
}
