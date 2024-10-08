<?php

namespace WpService\Contracts;

interface WpRobotsNoindex
{
    /**
     * Adds `noindex` to the robots meta tag if required by the site configuration.
     *
     * If a blog is marked as not being public then noindex will be output to
     * tell web robots not to index the page content. Add this to the
     * {@see 'wp_robots'} filter.
     *
     * Typical usage is as a {@see 'wp_robots'} callback:
     *
     *     add_filter( 'wp_robots', 'wp_robots_noindex' );
     *
     * @since 5.7.0
     *
     * @see wp_robots_no_robots()
     *
     * @param array $robots Associative array of robots directives.
     * @return array Filtered robots directives.
     */
    public function wpRobotsNoindex(array $robots): array;
}
