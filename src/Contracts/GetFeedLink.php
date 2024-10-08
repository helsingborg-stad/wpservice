<?php

namespace WpService\Contracts;

interface GetFeedLink
{
    /**
 * Retrieves the permalink for the feed type.
 *
 * @since 1.5.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $feed Optional. Feed type. Possible values include 'rss2', 'atom'.
 *                     Default is the value of get_default_feed().
 * @return string The feed permalink.
 */
    public function getFeedLink(string $feed = ''): string;
}
