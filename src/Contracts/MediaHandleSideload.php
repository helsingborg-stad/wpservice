<?php

namespace WpService\Contracts;

interface MediaHandleSideload
{
    /**
 * Handles a side-loaded file in the same way as an uploaded file is handled by media_handle_upload().
 *
 * @since 2.6.0
 * @since 5.3.0 The `$post_id` parameter was made optional.
 *
 * @param string[] $fileArray Array that represents a `$_FILES` upload array.
 * @param int $postId    Optional. The post ID the media is associated with.
 * @param string $desc       Optional. Description of the side-loaded file. Default null.
 * @param array $postData  Optional. Post data to override. Default empty array.
 * @return int|\WP_Error The ID of the attachment or a WP_Error on failure.
 */
    public function mediaHandleSideload(array $fileArray, int $postId, string $desc, array $postData): int|\WP_Error;
}
