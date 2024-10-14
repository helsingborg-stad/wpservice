<?php

namespace WpService\Contracts;

interface WpRobotsMaxImagePreviewLarge
{
/**
 * Adds `max-image-preview:large` to the robots meta tag.
 *
 * This directive tells web robots that large image previews are allowed to be
 * displayed, e.g. in search engines, unless the blog is marked as not being public.
 *
 * Typical usage is as a {@see 'wp_robots'} callback:
 *
 *     add_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );
 *
 * @since 5.7.0
 *
 * @param array $robots Associative array of robots directives.
 * @return array Filtered robots directives.
 */
    public function wpRobotsMaxImagePreviewLarge(array $robots): array;
}
