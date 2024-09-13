<?php

namespace WpService\Contracts;

use WP_Post;
interface GetPostMimeType
{
    /**
     * Retrieves the mime type of an attachment based on the ID.
     * This function can be used with any post type, but it makes more sense with attachments.
     *
     * @param int|WP_Post $post Post ID or post object. Defaults to global $post.
     *
     * @return string|false The mime type on success, false on failure.
     *
     * @see https://developer.wordpress.org/reference/functions/get_post_mime_type/
     */
    public function getPostMimeType(int|WP_Post $post = null): string|false;
}
