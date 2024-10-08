<?php

namespace WpService\Contracts;

interface GetCommentAuthorEmailLink
{
    /**
 * Returns the HTML email link to the author of the current comment.
 *
 * Care should be taken to protect the email address and assure that email
 * harvesters do not capture your commenter's email address. Most assume that
 * their email address will not appear in raw form on the site. Doing so will
 * enable anyone, including those that people don't want to get the email
 * address and use it for their own means good and bad.
 *
 * @since 2.7.0
 * @since 4.6.0 Added the `$comment` parameter.
 *
 * @param string $linkText Optional. Text to display instead of the comment author's email address.
 *                                  Default empty.
 * @param string $before    Optional. Text or HTML to display before the email link. Default empty.
 * @param string $after     Optional. Text or HTML to display after the email link. Default empty.
 * @param int|\WP_Comment $comment   Optional. Comment ID or WP_Comment object. Default is the current comment.
 * @return string HTML markup for the comment author email link. By default, the email address is obfuscated
 *                via the {@see 'comment_email'} filter with antispambot().
 */
    public function getCommentAuthorEmailLink(string $linkText, string $before, string $after, int|\WP_Comment $comment): string;
}
