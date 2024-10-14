<?php

namespace WpService\Contracts;

interface TheContentFeed
{
/**
 * Displays the post content for feeds.
 *
 * @since 2.9.0
 *
 * @param string $feedType The type of feed. rss2 | atom | rss | rdf
 */
    public function theContentFeed(string $feedType = null): void;
}
