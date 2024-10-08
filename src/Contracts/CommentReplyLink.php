<?php

namespace WpService\Contracts;

interface CommentReplyLink
{
    /**
 * Displays the HTML content for reply to comment link.
 *
 * @since 2.7.0
 *
 * @see get_comment_reply_link()
 *
 * @param array $args    Optional. Override default options. Default empty array.
 * @param int|\WP_Comment $comment Optional. Comment being replied to. Default current comment.
 * @param int|\WP_Post $post    Optional. Post ID or WP_Post object the comment is going to be displayed on.
 *                                Default current post.
 */
    public function commentReplyLink(array $args, int|\WP_Comment $comment, int|\WP_Post $post): void;
}
