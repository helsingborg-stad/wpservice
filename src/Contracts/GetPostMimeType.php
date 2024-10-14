<?php

namespace WpService\Contracts;

interface GetPostMimeType
{
/**
 * Retrieves the mime type of an attachment based on the ID.
 *
 * This function can be used with any post type, but it makes more sense with
 * attachments.
 *
 * @since 2.0.0
 *
 * @param int|\WP_Post $post Optional. Post ID or post object. Defaults to global $post.
 * @return string|false The mime type on success, false on failure.
 */
    public function getPostMimeType(int|\WP_Post $post = null): string|false;
}
