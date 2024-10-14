<?php

namespace WpService\Contracts;

interface GetDefaultFeed
{
/**
 * Retrieves the default feed.
 *
 * The default feed is 'rss2', unless a plugin changes it through the
 * {@see 'default_feed'} filter.
 *
 * @since 2.5.0
 *
 * @return string Default feed, or for example 'rss2', 'atom', etc.
 */
    public function getDefaultFeed(): string;
}
