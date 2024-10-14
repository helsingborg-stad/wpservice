<?php

namespace WpService\Contracts;

interface GetPostEmbedUrl
{
/**
 * Retrieves the URL to embed a specific post in an iframe.
 *
 * @since 4.4.0
 *
 * @param int|\WP_Post $post Optional. Post ID or object. Defaults to the current post.
 * @return string|false The post embed URL on success, false if the post doesn't exist.
 */
    public function getPostEmbedUrl(int|\WP_Post $post = null): string|false;
}
