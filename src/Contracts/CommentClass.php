<?php

namespace WpService\Contracts;

interface CommentClass
{
    /**
 * Generates semantic classes for each comment element.
 *
 * @since 2.7.0
 * @since 4.4.0 Added the ability for `$comment` to also accept a WP_Comment object.
 *
 * @param string|string[] $cssClass Optional. One or more classes to add to the class list.
 *                                   Default empty.
 * @param int|\WP_Comment $comment   Optional. Comment ID or WP_Comment object. Default current comment.
 * @param int|\WP_Post $post      Optional. Post ID or WP_Post object. Default current post.
 * @param bool $display   Optional. Whether to print or return the output.
 *                                   Default true.
 * @return void|string Void if `$display` argument is true, comment classes if `$display` is false.
 */
    public function commentClass(string|array $cssClass = '', int|\WP_Comment $comment = null, int|\WP_Post $post = null, bool $display = true): string;
}
