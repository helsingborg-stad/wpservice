<?php

namespace WpService\Contracts;

interface WpGetCanonicalUrl
{
    /**
 * Returns the canonical URL for a post.
 *
 * When the post is the same as the current requested page the function will handle the
 * pagination arguments too.
 *
 * @since 4.6.0
 *
 * @param int|\WP_Post $post Optional. Post ID or object. Default is global `$post`.
 * @return string|false The canonical URL. False if the post does not exist
 *                      or has not been published yet.
 */
    public function wpGetCanonicalUrl(int|\WP_Post $post): string|false;
}
