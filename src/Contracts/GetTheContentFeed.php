<?php

namespace WpService\Contracts;

interface GetTheContentFeed
{
    /**
 * Retrieves the post content for feeds.
 *
 * @since 2.9.0
 *
 * @see get_the_content()
 *
 * @param string $feedType The type of feed. rss2 | atom | rss | rdf
 * @return string The filtered content.
 */
    public function getTheContentFeed(string $feedType): string;
}
