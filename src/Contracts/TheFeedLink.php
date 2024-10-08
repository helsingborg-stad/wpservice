<?php

namespace WpService\Contracts;

interface TheFeedLink
{
    /**
 * Displays the permalink for the feed type.
 *
 * @since 3.0.0
 *
 * @param string $anchor The link's anchor text.
 * @param string $feed   Optional. Feed type. Possible values include 'rss2', 'atom'.
 *                       Default is the value of get_default_feed().
 */
    public function theFeedLink(string $anchor, string $feed = ''): void;
}
