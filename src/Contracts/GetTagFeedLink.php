<?php

namespace WpService\Contracts;

interface GetTagFeedLink
{
    /**
 * Retrieves the permalink for a tag feed.
 *
 * @since 2.3.0
 *
 * @param int|WP_Term|object $tag  The ID or term object whose feed link will be retrieved.
 * @param string $feed Optional. Feed type. Possible values include 'rss2', 'atom'.
 *                                 Default is the value of get_default_feed().
 * @return string                  The feed permalink for the given tag.
 */
    public function getTagFeedLink(int|object $tag, string $feed): string;
}
