<?php

namespace WpService\Contracts;

interface UrlToPostid
{
/**
 * Examines a URL and try to determine the post ID it represents.
 *
 * Checks are supposedly from the hosted site blog.
 *
 * @since 1.0.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 * @global WP         $wp         Current WordPress environment instance.
 *
 * @param string $url Permalink to check.
 * @return int Post ID, or 0 on failure.
 */
    public function urlToPostid(string $url): int;
}
