<?php

namespace WpService\Contracts;

interface WpCheckPostLock
{
    /**
     * Determines whether the post is currently being edited by another user.
     *
     * @since 2.5.0
     *
     * @param int|\WP_Post $post ID or object of the post to check for editing.
     * @return int|false ID of the user with lock. False if the post does not exist, post is not locked,
     *                   the user with lock does not exist, or the post is locked by current user.
     */
    public function wpCheckPostLock(int|\WP_Post $post): int|false;
}
