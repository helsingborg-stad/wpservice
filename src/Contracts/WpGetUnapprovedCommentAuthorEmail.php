<?php

namespace WpService\Contracts;

interface WpGetUnapprovedCommentAuthorEmail
{
    /**
 * Gets unapproved comment author's email.
 *
 * Used to allow the commenter to see their pending comment.
 *
 * @since 5.1.0
 * @since 5.7.0 The window within which the author email for an unapproved comment
 *              can be retrieved was extended to 10 minutes.
 *
 * @return string The unapproved comment author's email (when supplied).
 */
    public function wpGetUnapprovedCommentAuthorEmail(): string;
}
