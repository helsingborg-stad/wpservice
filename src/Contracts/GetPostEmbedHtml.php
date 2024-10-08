<?php

namespace WpService\Contracts;

interface GetPostEmbedHtml
{
    /**
 * Retrieves the embed code for a specific post.
 *
 * @since 4.4.0
 *
 * @param int $width  The width for the response.
 * @param int $height The height for the response.
 * @param int|\WP_Post $post   Optional. Post ID or object. Default is global `$post`.
 * @return string|false Embed code on success, false if post doesn't exist.
 */
    public function getPostEmbedHtml(int $width, int $height, int|\WP_Post $post): string|false;
}
