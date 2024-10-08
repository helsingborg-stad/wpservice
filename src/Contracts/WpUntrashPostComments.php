<?php

namespace WpService\Contracts;

interface WpUntrashPostComments
{
    /**
 * Restores comments for a post from the Trash.
 *
 * @since 2.9.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|\WP_Post|null $post Optional. Post ID or post object. Defaults to global $post.
 * @return true|void
 */
    public function wpUntrashPostComments(int|\WP_Post|null $post = null): mixed;
}
