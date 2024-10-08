<?php

namespace WpService\Contracts;

interface WpNotifyPostauthor
{
    /**
     * Notifies an author (and/or others) of a comment/trackback/pingback on a post.
     *
     * @since 1.0.0
     *
     * @param int|\WP_Comment $commentId Comment ID or WP_Comment object.
     * @param string $deprecated Not used.
     * @return bool True on completion. False if no email addresses were specified.
     */
    public function wpNotifyPostauthor(int|\WP_Comment $commentId, string $deprecated): bool;
}
