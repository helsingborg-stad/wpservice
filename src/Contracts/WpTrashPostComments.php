<?php

namespace WpService\Contracts;

interface WpTrashPostComments
{
    /**
 * Moves comments for a post to the Trash.
 *
 * @since 2.9.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|\WP_Post|null $post Optional. Post ID or post object. Defaults to global $post.
 * @return mixed|void False on failure.
 */
    public function wpTrashPostComments(int|\WP_Post|null $post): mixed;
}
