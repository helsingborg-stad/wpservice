<?php

namespace WpService\Contracts;

interface GetSearchCommentsFeedLink
{
/**
 * Retrieves the permalink for the search results comments feed.
 *
 * @since 2.5.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $searchQuery Optional. Search query. Default empty.
 * @param string $feed         Optional. Feed type. Possible values include 'rss2', 'atom'.
 *                             Default is the value of get_default_feed().
 * @return string The comments feed search results permalink.
 */
    public function getSearchCommentsFeedLink(string $searchQuery = '', string $feed = ''): string;
}
