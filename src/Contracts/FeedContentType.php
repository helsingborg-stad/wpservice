<?php

namespace WpService\Contracts;

interface FeedContentType
{
    /**
 * Returns the content type for specified feed type.
 *
 * @since 2.8.0
 *
 * @param string $type Type of feed. Possible values include 'rss', rss2', 'atom', and 'rdf'.
 * @return string Content type for specified feed type.
 */
    public function feedContentType(string $type): string;
}
