<?php

namespace WpService\Contracts;

interface WpInsertComment
{
    /**
 * Inserts a comment into the database.
 *
 * @since 2.0.0
 * @since 4.4.0 Introduced the `$comment_meta` argument.
 * @since 5.5.0 Default value for `$comment_type` argument changed to `comment`.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $commentdata {
 *     Array of arguments for inserting a new comment.
 *
 *     @type string     $comment_agent        The HTTP user agent of the `$comment_author` when
 *                                            the comment was submitted. Default empty.
 *     @type int|string $comment_approved     Whether the comment has been approved. Default 1.
 *     @type string     $comment_author       The name of the author of the comment. Default empty.
 *     @type string     $comment_author_email The email address of the `$comment_author`. Default empty.
 *     @type string     $comment_author_IP    The IP address of the `$comment_author`. Default empty.
 *     @type string     $comment_author_url   The URL address of the `$comment_author`. Default empty.
 *     @type string     $comment_content      The content of the comment. Default empty.
 *     @type string     $comment_date         The date the comment was submitted. To set the date
 *                                            manually, `$comment_date_gmt` must also be specified.
 *                                            Default is the current time.
 *     @type string     $comment_date_gmt     The date the comment was submitted in the GMT timezone.
 *                                            Default is `$comment_date` in the site's GMT timezone.
 *     @type int        $comment_karma        The karma of the comment. Default 0.
 *     @type int        $comment_parent       ID of this comment's parent, if any. Default 0.
 *     @type int        $comment_post_ID      ID of the post that relates to the comment, if any.
 *                                            Default 0.
 *     @type string     $comment_type         Comment type. Default 'comment'.
 *     @type array      $comment_meta         Optional. Array of key/value pairs to be stored in commentmeta for the
 *                                            new comment.
 *     @type int        $user_id              ID of the user who submitted the comment. Default 0.
 * }
 * @return int|false The new comment's ID on success, false on failure.
 */
    public function wpInsertComment(array $commentdata): int|false;
}
