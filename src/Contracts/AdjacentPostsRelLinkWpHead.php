<?php

namespace WpService\Contracts;

interface AdjacentPostsRelLinkWpHead
{
/**
 * Displays relational links for the posts adjacent to the current post for single post pages.
 *
 * This is meant to be attached to actions like 'wp_head'. Do not call this directly in plugins
 * or theme templates.
 *
 * @since 3.0.0
 * @since 5.6.0 No longer used in core.
 *
 * @see adjacent_posts_rel_link()
 */
    public function adjacentPostsRelLinkWpHead(): void;
}
