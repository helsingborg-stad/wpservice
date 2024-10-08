<?php

namespace WpService\Contracts;

interface CommentsOpen
{
    /**
 * Determines whether the current post is open for comments.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 1.5.0
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default current post.
 * @return bool True if the comments are open.
 */
    public function commentsOpen(int|\WP_Post $post): bool;
}
