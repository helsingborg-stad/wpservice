<?php

namespace WpService\Contracts;

interface GetPostGalleries
{
    /**
 * Retrieves galleries from the passed post's content.
 *
 * @since 3.6.0
 *
 * @param int|\WP_Post $post Post ID or object.
 * @param bool $html Optional. Whether to return HTML or data in the array. Default true.
 * @return array A list of arrays, each containing gallery data and srcs parsed
 *               from the expanded shortcode.
 */
    public function getPostGalleries(int|\WP_Post $post, bool $html = true): array;
}
