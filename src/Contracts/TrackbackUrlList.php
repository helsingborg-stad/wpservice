<?php

namespace WpService\Contracts;

interface TrackbackUrlList
{
/**
 * Does trackbacks for a list of URLs.
 *
 * @since 1.0.0
 *
 * @param string $tbList Comma separated list of URLs.
 * @param int $postId Post ID.
 */
    public function trackbackUrlList(string $tbList, int $postId): void;
}
