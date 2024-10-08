<?php

namespace WpService\Contracts;

interface TheCategoryRss
{
    /**
 * Displays the post categories in the feed.
 *
 * @since 0.71
 *
 * @see get_the_category_rss() For better explanation.
 *
 * @param string $type Optional, default is the type returned by get_default_feed().
 */
    public function theCategoryRss(string $type = null): void;
}
