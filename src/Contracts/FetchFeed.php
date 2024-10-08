<?php

namespace WpService\Contracts;

interface FetchFeed
{
    /**
 * Builds SimplePie object based on RSS or Atom feed from URL.
 *
 * @since 2.8.0
 *
 * @param string|string[] $url URL of feed to retrieve. If an array of URLs, the feeds are merged
 *                             using SimplePie's multifeed feature.
 *                             See also {@link http://simplepie.org/wiki/faq/typical_multifeed_gotchas}
 * @return \SimplePie|\WP_Error SimplePie object on success or WP_Error object on failure.
 */
    public function fetchFeed(string|array $url): \SimplePie|\WP_Error;
}
