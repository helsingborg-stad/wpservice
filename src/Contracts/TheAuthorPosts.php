<?php

namespace WpService\Contracts;

interface TheAuthorPosts
{
/**
 * Displays the number of posts by the author of the current post.
 *
 * @link https://developer.wordpress.org/reference/functions/the_author_posts/
 * @since 0.71
 */
    public function theAuthorPosts(): void;
}
