<?php

namespace WpService\Contracts;

interface WpTitleRss
{
    /**
 * Displays the blog title for display of the feed title.
 *
 * @since 2.2.0
 * @since 4.4.0 The optional `$sep` parameter was deprecated and renamed to `$deprecated`.
 *
 * @param string $deprecated Unused.
 */
    public function wpTitleRss(string $deprecated): void;
}
