<?php

namespace WpService\Contracts;

interface TheAuthorPostsLink
{
/**
 * Displays an HTML link to the author page of the current post's author.
 *
 * @since 1.2.0
 * @since 4.4.0 Converted into a wrapper for get_the_author_posts_link()
 *
 * @param string $deprecated Unused.
 */
    public function theAuthorPostsLink(string $deprecated = ''): void;
}
