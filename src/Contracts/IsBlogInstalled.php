<?php

namespace WpService\Contracts;

interface IsBlogInstalled
{
    /**
     * Determines whether WordPress is already installed.
     *
     * The cache will be checked first. If you have a cache plugin, which saves
     * the cache values, then this will work. If you use the default WordPress
     * cache, and the database goes away, then you might have problems.
     *
     * Checks for the 'siteurl' option for whether WordPress is installed.
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 2.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return bool Whether the site is already installed.
     */
    public function isBlogInstalled(): bool;
}
