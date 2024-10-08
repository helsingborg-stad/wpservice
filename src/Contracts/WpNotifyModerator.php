<?php

namespace WpService\Contracts;

interface WpNotifyModerator
{
    /**
     * Notifies the moderator of the site about a new comment that is awaiting approval.
     *
     * @since 1.0.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * Uses the {@see 'notify_moderator'} filter to determine whether the site moderator
     * should be notified, overriding the site setting.
     *
     * @param int $commentId Comment ID.
     * @return true Always returns true.
     */
    public function wpNotifyModerator(int $commentId): true;
}
