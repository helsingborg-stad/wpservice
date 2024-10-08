<?php

namespace WpService\Contracts;

interface GetPostReplyLink
{
    /**
 * Retrieves HTML content for reply to post link.
 *
 * @since 2.7.0
 *
 * @param array $args {
 *     Optional. Override default arguments.
 *
 *     @type string $add_below  The first part of the selector used to identify the comment to respond below.
 *                              The resulting value is passed as the first parameter to addComment.moveForm(),
 *                              concatenated as $add_below-$comment->comment_ID. Default is 'post'.
 *     @type string $respond_id The selector identifying the responding comment. Passed as the third parameter
 *                              to addComment.moveForm(), and appended to the link URL as a hash value.
 *                              Default 'respond'.
 *     @type string $reply_text Text of the Reply link. Default is 'Leave a Comment'.
 *     @type string $login_text Text of the link to reply if logged out. Default is 'Log in to leave a Comment'.
 *     @type string $before     Text or HTML to add before the reply link. Default empty.
 *     @type string $after      Text or HTML to add after the reply link. Default empty.
 * }
 * @param int|\WP_Post $post    Optional. Post ID or WP_Post object the comment is going to be displayed on.
 *                             Default current post.
 * @return string|false|null Link to show comment form, if successful. False, if comments are closed.
 */
    public function getPostReplyLink(array $args, int|\WP_Post $post): string|false|null;
}
