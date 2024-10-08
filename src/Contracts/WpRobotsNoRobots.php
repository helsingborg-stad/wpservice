<?php

namespace WpService\Contracts;

interface WpRobotsNoRobots
{
    /**
     * Adds `noindex` to the robots meta tag.
     *
     * This directive tells web robots not to index the page content.
     *
     * Typical usage is as a {@see 'wp_robots'} callback:
     *
     *     add_filter( 'wp_robots', 'wp_robots_no_robots' );
     *
     * @since 5.7.0
     *
     * @param array $robots Associative array of robots directives.
     * @return array Filtered robots directives.
     */
    public function wpRobotsNoRobots(array $robots): array;
}
