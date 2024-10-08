<?php

namespace WpService\Contracts;

interface WpStartObjectCache
{
    /**
 * Starts the WordPress object cache.
 *
 * If an object-cache.php file exists in the wp-content directory,
 * it uses that drop-in as an external object cache.
 *
 * @since 3.0.0
 * @access private
 *
 * @global array $wp_filter Stores all of the filters.
 */
    public function wpStartObjectCache(): void;
}
