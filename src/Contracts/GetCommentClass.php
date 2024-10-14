<?php

namespace WpService\Contracts;

interface GetCommentClass
{
/**
 * Returns the classes for the comment div as an array.
 *
 * @since 2.7.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @global int $comment_alt
 * @global int $comment_depth
 * @global int $comment_thread_alt
 *
 * @param string|string[] $cssClass  Optional. One or more classes to add to the class list.
 *                                    Default empty.
 * @param int|\WP_Comment $commentId Optional. Comment ID or WP_Comment object. Default current comment.
 * @param int|\WP_Post $post       Optional. Post ID or WP_Post object. Default current post.
 * @return string[] An array of classes.
 */
    public function getCommentClass(string|array $cssClass = '', int|\WP_Comment $commentId = null, int|\WP_Post $post = null): array;
}
