<?php

namespace WpService\Contracts;

interface WpGetPostAutosave
{
/**
 * Retrieves the autosaved data of the specified post.
 *
 * Returns a post object with the information that was autosaved for the specified post.
 * If the optional $user_id is passed, returns the autosave for that user, otherwise
 * returns the latest autosave.
 *
 * @since 2.6.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $postId The post ID.
 * @param int $userId Optional. The post author ID. Default 0.
 * @return \WP_Post|false The autosaved data or false on failure or when no autosave exists.
 */
    public function wpGetPostAutosave(int $postId, int $userId = 0): \WP_Post|false;
}
