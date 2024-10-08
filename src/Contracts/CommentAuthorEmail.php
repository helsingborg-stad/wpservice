<?php

namespace WpService\Contracts;

interface CommentAuthorEmail
{
    /**
     * Displays the email of the author of the current global $comment.
     *
     * Care should be taken to protect the email address and assure that email
     * harvesters do not capture your commenter's email address. Most assume that
     * their email address will not appear in raw form on the site. Doing so will
     * enable anyone, including those that people don't want to get the email
     * address and use it for their own means good and bad.
     *
     * @since 0.71
     * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
     *
     * @param int|\WP_Comment $commentId Optional. WP_Comment or the ID of the comment for which to print the author's email.
     *                                   Default current comment.
     */
    public function commentAuthorEmail(int|\WP_Comment $commentId = 0): void;
}
