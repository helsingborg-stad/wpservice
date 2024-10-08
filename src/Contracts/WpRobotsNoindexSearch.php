<?php

namespace WpService\Contracts;

interface WpRobotsNoindexSearch
{
    /**
     * Adds `noindex` to the robots meta tag if a search is being performed.
     *
     * If a search is being performed then noindex will be output to
     * tell web robots not to index the page content. Add this to the
     * {@see 'wp_robots'} filter.
     *
     * Typical usage is as a {@see 'wp_robots'} callback:
     *
     *     add_filter( 'wp_robots', 'wp_robots_noindex_search' );
     *
     * @since 5.7.0
     *
     * @see wp_robots_no_robots()
     *
     * @param array $robots Associative array of robots directives.
     * @return array Filtered robots directives.
     */
    public function wpRobotsNoindexSearch(array $robots): array;
}
