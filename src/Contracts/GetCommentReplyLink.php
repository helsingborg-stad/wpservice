<?php

namespace WpService\Contracts;

interface GetCommentReplyLink
{
    /**
 * Retrieves HTML content for reply to comment link.
 *
 * @since 2.7.0
 * @since 4.4.0 Added the ability for `$comment` to also accept a WP_Comment object.
 *
 * @param array $args {
 *     Optional. Override default arguments.
 *
 *     @type string $add_below  The first part of the selector used to identify the comment to respond below.
 *                              The resulting value is passed as the first parameter to addComment.moveForm(),
 *                              concatenated as $add_below-$comment->comment_ID. Default 'comment'.
 *     @type string $respond_id The selector identifying the responding comment. Passed as the third parameter
 *                              to addComment.moveForm(), and appended to the link URL as a hash value.
 *                              Default 'respond'.
 *     @type string $reply_text The text of the Reply link. Default 'Reply'.
 *     @type string $login_text The text of the link to reply if logged out. Default 'Log in to Reply'.
 *     @type int    $max_depth  The max depth of the comment tree. Default 0.
 *     @type int    $depth      The depth of the new comment. Must be greater than 0 and less than the value
 *                              of the 'thread_comments_depth' option set in Settings > Discussion. Default 0.
 *     @type string $before     The text or HTML to add before the reply link. Default empty.
 *     @type string $after      The text or HTML to add after the reply link. Default empty.
 * }
 * @param int|\WP_Comment $comment Optional. Comment being replied to. Default current comment.
 * @param int|\WP_Post $post    Optional. Post ID or WP_Post object the comment is going to be displayed on.
 *                                Default current post.
 * @return string|false|null Link to show comment form, if successful. False, if comments are closed.
 */
    public function getCommentReplyLink(array $args, int|\WP_Comment $comment, int|\WP_Post $post): string|false|null;
}
