<?php

namespace WpService\Contracts;

interface GetTheCategoryRss
{
    /**
 * Retrieves all of the post categories, formatted for use in feeds.
 *
 * All of the categories for the current post in the feed loop, will be
 * retrieved and have feed markup added, so that they can easily be added to the
 * RSS2, Atom, or RSS1 and RSS0.91 RDF feeds.
 *
 * @since 2.1.0
 *
 * @param string $type Optional, default is the type returned by get_default_feed().
 * @return string All of the post categories for displaying in the feed.
 */
    public function getTheCategoryRss(string $type): string;
}
