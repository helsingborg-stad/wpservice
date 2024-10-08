<?php

namespace WpService\Contracts;

interface GetPostGalleriesImages
{
    /**
 * Retrieves the image srcs from galleries from a post's content, if present.
 *
 * @since 3.6.0
 *
 * @see get_post_galleries()
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
 * @return array A list of lists, each containing image srcs parsed.
 *               from an expanded shortcode
 */
    public function getPostGalleriesImages(int|\WP_Post $post = 0): array;
}
