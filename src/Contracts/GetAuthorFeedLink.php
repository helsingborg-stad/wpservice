<?php

namespace WpService\Contracts;

interface GetAuthorFeedLink
{
    /**
     * Retrieves the feed link for a given author.
     *
     * Returns a link to the feed for all posts by a given author. A specific feed
     * can be requested or left blank to get the default feed.
     *
     * @since 2.5.0
     *
     * @param int $authorId Author ID.
     * @param string $feed      Optional. Feed type. Possible values include 'rss2', 'atom'.
     *                          Default is the value of get_default_feed().
     * @return string Link to the feed for the author specified by $author_id.
     */
    public function getAuthorFeedLink(int $authorId, string $feed = ''): string;
}
