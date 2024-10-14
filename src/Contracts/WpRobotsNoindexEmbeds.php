<?php

namespace WpService\Contracts;

interface WpRobotsNoindexEmbeds
{
/**
 * Adds `noindex` to the robots meta tag for embeds.
 *
 * Typical usage is as a {@see 'wp_robots'} callback:
 *
 *     add_filter( 'wp_robots', 'wp_robots_noindex_embeds' );
 *
 * @since 5.7.0
 *
 * @see wp_robots_no_robots()
 *
 * @param array $robots Associative array of robots directives.
 * @return array Filtered robots directives.
 */
    public function wpRobotsNoindexEmbeds(array $robots): array;
}
