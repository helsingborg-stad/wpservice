<?php

namespace WpService\Contracts;

interface IsMultiAuthor
{
    /**
     * Determines whether this site has more than one author.
     *
     * Checks to see if more than one author has published posts.
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 3.2.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return bool Whether or not we have more than one author
     */
    public function isMultiAuthor(): bool;
}
