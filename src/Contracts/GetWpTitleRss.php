<?php

namespace WpService\Contracts;

interface GetWpTitleRss
{
/**
 * Retrieves the blog title for the feed title.
 *
 * @since 2.2.0
 * @since 4.4.0 The optional `$sep` parameter was deprecated and renamed to `$deprecated`.
 *
 * @param string $deprecated Unused.
 * @return string The document title.
 */
    public function getWpTitleRss(string $deprecated = '&#8211;'): string;
}
