<?php

namespace WpService\Contracts;

interface GetPostTypeArchiveFeedLink
{
    /**
     * Retrieves the permalink for a post type archive feed.
     *
     * @since 3.1.0
     *
     * @param string $postType Post type.
     * @param string $feed      Optional. Feed type. Possible values include 'rss2', 'atom'.
     *                          Default is the value of get_default_feed().
     * @return string|false The post type feed permalink. False if the post type
     *                      does not exist or does not have an archive.
     */
    public function getPostTypeArchiveFeedLink(string $postType, string $feed = ''): string|false;
}
