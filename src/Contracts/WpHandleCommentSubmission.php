<?php

namespace WpService\Contracts;

interface WpHandleCommentSubmission
{
    /**
 * Handles the submission of a comment, usually posted to wp-comments-post.php via a comment form.
 *
 * This function expects unslashed data, as opposed to functions such as `wp_new_comment()` which
 * expect slashed data.
 *
 * @since 4.4.0
 *
 * @param array $commentData {
 *     Comment data.
 *
 *     @type string|int $comment_post_ID             The ID of the post that relates to the comment.
 *     @type string     $author                      The name of the comment author.
 *     @type string     $email                       The comment author email address.
 *     @type string     $url                         The comment author URL.
 *     @type string     $comment                     The content of the comment.
 *     @type string|int $comment_parent              The ID of this comment's parent, if any. Default 0.
 *     @type string     $_wp_unfiltered_html_comment The nonce value for allowing unfiltered HTML.
 * }
 * @return \WP_Comment|\WP_Error A WP_Comment object on success, a WP_Error object on failure.
 */
    public function wpHandleCommentSubmission(array $commentData): \WP_Comment|\WP_Error;
}
