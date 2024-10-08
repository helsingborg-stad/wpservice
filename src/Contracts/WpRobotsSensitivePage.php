<?php

namespace WpService\Contracts;

interface WpRobotsSensitivePage
{
    /**
     * Adds `noindex` and `noarchive` to the robots meta tag.
     *
     * This directive tells web robots not to index or archive the page content and
     * is recommended to be used for sensitive pages.
     *
     * Typical usage is as a {@see 'wp_robots'} callback:
     *
     *     add_filter( 'wp_robots', 'wp_robots_sensitive_page' );
     *
     * @since 5.7.0
     *
     * @param array $robots Associative array of robots directives.
     * @return array Filtered robots directives.
     */
    public function wpRobotsSensitivePage(array $robots): array;
}
