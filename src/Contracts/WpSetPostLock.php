<?php

namespace WpService\Contracts;

interface WpSetPostLock
{
    /**
     * Marks the post as currently being edited by the current user.
     *
     * @since 2.5.0
     *
     * @param int|\WP_Post $post ID or object of the post being edited.
     * @return array|false {
     *     Array of the lock time and user ID. False if the post does not exist, or there
     *     is no current user.
     *
     * @type int $0 The current time as a Unix timestamp.
     * @type int $1 The ID of the current user.
     * }
     */
    public function wpSetPostLock(int|\WP_Post $post): array|false;
}
