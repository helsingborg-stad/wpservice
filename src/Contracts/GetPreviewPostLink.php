<?php

namespace WpService\Contracts;

interface GetPreviewPostLink
{
/**
 * Retrieves the URL used for the post preview.
 *
 * Allows additional query args to be appended.
 *
 * @since 4.4.0
 *
 * @param int|\WP_Post $post         Optional. Post ID or `WP_Post` object. Defaults to global `$post`.
 * @param array $queryArgs   Optional. Array of additional query args to be appended to the link.
 *                                  Default empty array.
 * @param string $previewLink Optional. Base preview link to be used if it should differ from the
 *                                  post permalink. Default empty.
 * @return string|null URL used for the post preview, or null if the post does not exist.
 */
    public function getPreviewPostLink(int|\WP_Post $post = null, array $queryArgs = [], string $previewLink = ''): string|null;
}
