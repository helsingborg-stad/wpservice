<?php

namespace WpService\Contracts;

interface UserTrailingslashit
{
/**
 * Retrieves a trailing-slashed string if the site is set for adding trailing slashes.
 *
 * Conditionally adds a trailing slash if the permalink structure has a trailing
 * slash, strips the trailing slash if not. The string is passed through the
 * {@see 'user_trailingslashit'} filter. Will remove trailing slash from string, if
 * site is not set to have them.
 *
 * @since 2.2.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $url         URL with or without a trailing slash.
 * @param string $typeOfUrl Optional. The type of URL being considered (e.g. single, category, etc)
 *                            for use in the filter. Default empty string.
 * @return string The URL with the trailing slash appended or stripped.
 */
    public function userTrailingslashit(string $url, string $typeOfUrl = ''): string;
}
