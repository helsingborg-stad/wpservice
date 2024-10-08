<?php

namespace WpService\Contracts;

interface WpGetPostRevisionsUrl
{
    /**
 * Returns the url for viewing and potentially restoring revisions of a given post.
 *
 * @since 5.9.0
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
 * @return string|null The URL for editing revisions on the given post, otherwise null.
 */
    public function wpGetPostRevisionsUrl(int|\WP_Post $post = 0): string|null;
}
