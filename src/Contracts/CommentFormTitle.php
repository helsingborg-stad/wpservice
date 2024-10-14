<?php

namespace WpService\Contracts;

interface CommentFormTitle
{
/**
 * Displays text based on comment reply status.
 *
 * Only affects users with JavaScript disabled.
 *
 * @internal The $comment global must be present to allow template tags access to the current
 *           comment. See https://core.trac.wordpress.org/changeset/36512.
 *
 * @since 2.7.0
 * @since 6.2.0 Added the `$post` parameter.
 *
 * @global WP_Comment $comment Global comment object.
 *
 * @param string|false $noReplyText  Optional. Text to display when not replying to a comment.
 *                                          Default false.
 * @param string|false $replyText     Optional. Text to display when replying to a comment.
 *                                          Default false. Accepts "%s" for the author of the comment
 *                                          being replied to.
 * @param bool $linkToParent Optional. Boolean to control making the author's name a link
 *                                          to their comment. Default true.
 * @param int|\WP_Post|null $post           Optional. The post that the comment form is being displayed for.
 *                                          Defaults to the current global post.
 */
    public function commentFormTitle(string|false $noReplyText = false, string|false $replyText = false, bool $linkToParent = true, int|\WP_Post|null $post = null): void;
}
