<?php

namespace WpService\Contracts;

interface RedirectCanonical
{
/**
 * Redirects incoming links to the proper URL based on the site url.
 *
 * Search engines consider www.somedomain.com and somedomain.com to be two
 * different URLs when they both go to the same location. This SEO enhancement
 * prevents penalty for duplicate content by redirecting all incoming links to
 * one or the other.
 *
 * Prevents redirection for feeds, trackbacks, searches, and
 * admin URLs. Does not redirect on non-pretty-permalink-supporting IIS 7+,
 * page/post previews, WP admin, Trackbacks, robots.txt, favicon.ico, searches,
 * or on POST requests.
 *
 * Will also attempt to find the correct link when a user enters a URL that does
 * not exist based on exact WordPress query. Will instead try to parse the URL
 * or query in an attempt to figure the correct page to go to.
 *
 * @since 2.3.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 * @global bool       $is_IIS
 * @global WP_Query   $wp_query   WordPress Query object.
 * @global wpdb       $wpdb       WordPress database abstraction object.
 * @global WP         $wp         Current WordPress environment instance.
 *
 * @param string $requestedUrl Optional. The URL that was requested, used to
 *                              figure if redirect is needed.
 * @param bool $doRedirect   Optional. Redirect to the new URL.
 * @return string|void The string of the URL, if redirect needed.
 */
    public function redirectCanonical(string $requestedUrl = null, bool $doRedirect = true): mixed;
}
