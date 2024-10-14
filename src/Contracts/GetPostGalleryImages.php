<?php

namespace WpService\Contracts;

interface GetPostGalleryImages
{
/**
 * Checks a post's content for galleries and return the image srcs for the first found gallery.
 *
 * @since 3.6.0
 *
 * @see get_post_gallery()
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
 * @return string[] A list of a gallery's image srcs in order.
 */
    public function getPostGalleryImages(int|\WP_Post $post = 0): array;
}
