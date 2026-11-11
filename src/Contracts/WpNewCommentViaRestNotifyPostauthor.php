<?php

namespace WpService\Contracts;

interface WpNewCommentViaRestNotifyPostauthor
{
/**
 * Send a notification to the post author when a new note is added via the REST API.
 *
 * @since 6.9.0
 *
 * @param \WP_Comment $comment The comment object.
 */
    public function wpNewCommentViaRestNotifyPostauthor(\WP_Comment $comment): void;
}
