<?php

namespace WpService\Contracts;

interface GetSearchFeedLink
{
    /**
 * Retrieves the permalink for the search results feed.
 *
 * @since 2.5.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $searchQuery Optional. Search query. Default empty.
 * @param string $feed         Optional. Feed type. Possible values include 'rss2', 'atom'.
 *                             Default is the value of get_default_feed().
 * @return string The search results feed permalink.
 */
    public function getSearchFeedLink(string $searchQuery, string $feed): string;
}
