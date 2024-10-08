<?php

namespace WpService\Contracts;

interface IsHome
{
    /**
     * Determines whether the query is for the blog homepage.
     *
     * The blog homepage is the page that shows the time-based blog content of the site.
     *
     * is_home() is dependent on the site's "Front page displays" Reading Settings 'show_on_front'
     * and 'page_for_posts'.
     *
     * If a static page is set for the front page of the site, this function will return true only
     * on the page you set as the "Posts page".
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 1.5.0
     *
     * @see is_front_page()
     * @global WP_Query $wp_query WordPress Query object.
     *
     * @return bool Whether the query is for the blog homepage.
     */
    public function isHome(): bool;
}
