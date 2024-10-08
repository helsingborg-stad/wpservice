<?php

namespace WpService\Contracts;

interface PostReplyLink
{
    /**
 * Displays the HTML content for reply to post link.
 *
 * @since 2.7.0
 *
 * @see get_post_reply_link()
 *
 * @param array $args Optional. Override default options. Default empty array.
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object the comment is going to be displayed on.
 *                          Default current post.
 */
    public function postReplyLink(array $args = [], int|\WP_Post $post = null): void;
}
